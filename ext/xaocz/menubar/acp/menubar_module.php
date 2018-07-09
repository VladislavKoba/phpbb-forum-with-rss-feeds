<?php
/**
*
* @package menubar
* @copyright (c) 2015 xaocZ ( CabinetAdmina.ru )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace xaocz\menubar\acp;

class menubar_module
{
	protected $config;
	protected $phpbb_container;
	protected $config_text;
	protected $request;
	protected $template;
	protected $user;

	public	$u_action;

	function main($id, $mode)
	{
		global $cache, $config, $config_text, $db, $user, $auth, $template, $request;
		global $phpbb_root_path, $phpEx, $phpbb_admin_path, $phpbb_container;

		$this->config = $config;
		$this->config_text = $config_text;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;

		$this->page_title = 'ACP_MENUBAR';
		$this->tpl_name = 'acp_menubar';
		
		$submit = (isset($_POST['submit'])) ? true : false;
		$form_key = 'config_menubar';
		add_form_key($form_key);
		$error = array();
		
		$display_vars = array(
			'title'	=> 'ACP_MENUBAR',
			'vars'	=> array(
				'legend1'					=> 'ACP_MENUBAR_ON',
				'menubar_on'				=> array('lang' => 'ACP_MENUBAR_ON', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

				'legend2'					=> 'ACP_MENUBAR_ADD_CONTENT',
				'menubar_content'			=> array('lang' => 'ACP_MENUBAR_CONTENT', 'validate' => 'text', 'type' => 'textarea:12:30', 'explain' => true),
				'menubar_head'				=> array('lang' => 'ACP_MENUBAR_HEAD', 'validate' => 'text', 'type' => 'textarea:5:30', 'explain' => true),
				'menubar_newclass'			=> array('lang' => 'ACP_MENUBAR_NEW_CLASS', 'validate' => 'int', 'type' => 'text:30:30', 'explain' => true),
				'menubar_styles'			=> array('lang' => 'ACP_MENUBAR_STYLES', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),

				'legend3'					=> 'ACP_MENUBAR_MORE_MANAGE',
				'menubar_index'				=> array('lang' => 'ACP_MENUBAR_INDEX', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'menubar_position'			=> array('lang' => 'ACP_MENUBAR_POSITION', 'validate' => 'int', 'type' => 'custom', 'method' => 'select_forced_check', 'explain' => true),
				'menubar_fixed'				=> array('lang' => 'ACP_MENUBAR_FIXED', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
				'menubar_fixedscroll'		=> array('lang' => 'ACP_MENUBAR_FIXED_SCROLL', 'validate' => 'int', 'type' => 'text:3:3', 'explain' => true),

				'legend4'					=> 'ACP_SUBMIT_CHANGES',
			),
		);

		$config_text = $phpbb_container->get('config_text');

		$menubar_config_text_keys = array();
		$menubar_config_keys = array();

		foreach ( $display_vars['vars'] as $varname => $vararray )
		{
			if ( !is_array($vararray) ) continue;
			if ( $vararray['validate'] == 'text' )
			{
				$menubar_config_text_keys[] = $varname;
			}
			else
			{
				$menubar_config_keys[] = $varname;
			}
		}
		
		$menubar_config_text_values = array();
		foreach ( $menubar_config_text_keys as $key => $value)
		{
			$data = $config_text->get_array(array($value));
			$menubar_config_text_values[$value] = $data[$value];
		}

		$menubar_config_values = array();
		foreach ( $menubar_config_keys as $key => $value)
		{
			$menubar_config_values[$value] = $this->config[$value];
		}
		
		if (!sizeof($error) && $this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				$error[] = $user->lang('FORM_INVALID');
			}

			foreach ( $menubar_config_text_values as $key => $value)
			{
				$new_value = $request->variable(array('config',$key),'',true);
				if ( (string) $new_value !== (string) $value )
				{
					$value = $menubar_config_text_values[$key] = $new_value;
					$config_text->set_array(array(
						$key => $value,
					));
				}
			}

			foreach ( $menubar_config_values as $key => $value)
			{
				$new_value = $request->variable(array('config',$key),'',true);
				if ( (string) $new_value !== (string) $value )
				{
					$value = $menubar_config_values[$key] = $new_value;
					set_config($key,$value);
				}
			}

			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$new_config = array_merge($menubar_config_text_values,$menubar_config_values);

		$this->page_title = $display_vars['title'];
		
		$template->assign_vars(array(
			'L_TITLE'					=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'			=> $user->lang[$display_vars['title'] . '_EXPLAIN'],
			'L_TITLE_DESCRIPTION'		=> $user->lang[$display_vars['title'] . '_DESCRIPTION'],

			'S_ERROR'					=> (sizeof($error)) ? true : false,
			'ERROR_MSG'					=> implode('<br />', $error),
		));
		
		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'			=> true,
					'LEGEND'			=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$l_description = (isset($user->lang[$vars['lang'] . '_DESCRIPTION'])) ? $user->lang[$vars['lang'] . '_DESCRIPTION'] : '';

			$content = build_cfg_template($type, $config_key, $new_config, $config_key, $vars);

			if (empty($content))
			{
				continue;
			}

			$template->assign_block_vars('options', array(
				'KEY'					=> $config_key,
				'TITLE'					=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'				=> $vars['explain'],
				'TITLE_EXPLAIN'			=> $l_explain,
				'TITLE_DESCRIPTION'		=> $l_description,
				'CONTENT'				=> $content,
				)
			);

			unset($display_vars['vars'][$config_key]);
		}
	}
	function select_forced_check($value, $key = '')
	{
		$radio_ary = array(1 => 'ACP_MENUBAR_POSITION_AFTER', 0 => 'ACP_MENUBAR_POSITION_BEFORE');	

		return h_radio('config[menubar_position]', $radio_ary, $value, 'menubar_position', $key, '<br />');
	}
}