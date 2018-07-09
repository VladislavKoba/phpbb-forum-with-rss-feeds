<?php
/**
*
* @package Sidebar
* @copyright (c) 2015 Cece74
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sidebar\acp;

class sidebar_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		
		$this->config = $config;
		$this->request = $request;

		$user->add_lang('acp/common');
		$user->add_lang_ext('cece74/sidebar', 'acp/info_acp_sidebar');
		$this->tpl_name = 'acp_sidebar';
		$this->page_title = $user->lang['SIDEBAR_MOD'];
		add_form_key('acp_sidebar');
		// Version Check
		$this->config['SIDEBAR_VERSION'] = (isset($this->config['SIDEBAR_VERSION'])) ? $this->config['SIDEBAR_VERSION'] : '0.0.3';

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('acp_sidebar'))
			{
				trigger_error('FORM_INVALID');
			}

			$config->set('ad_status', $request->variable('ad_status', true));
			$config->set('ad_type', $request->variable('ad_type', true));
			$config->set('ad_firstpost', $request->variable('ad_firstpost', true));
			$config->set('ad_twitter', $request->variable('ad_twitter', true));
			$config->set('ad_forum7', $request->variable('ad_forum7', true));
			$config->set('ad_forum3', $request->variable('ad_forum3', true));
			$config->set('ad_facebookpage', $request->variable('ad_facebookpage', true));
			$config->set('ad_vk', $request->variable('ad_vk', true));
			$config->set('ad_all', $request->variable('ad_all', true));
			$config->set('sidebar_ad_code', $request->variable('ad_code', ''));
			$config->set('sidebar_ad_urlpage', $request->variable('ad_urlpage', ''));
			$config->set('sidebar_ad_code_slot', $request->variable('ad_code_slot', ''));
			$config->set('sidebar_width', $request->variable('sidebar_width', ''));
			$config->set('sidebar_height', $request->variable('sidebar_height', ''));
			$config->set('sidebar_text', $request->variable('sidebar_text', ''));

			trigger_error($user->lang['AD_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'AD_STATUS'		=> (!empty($this->config['ad_status'])) ? true : false,
			'AD_TYPE'		=> (!empty($this->config['ad_type'])) ? true : false,
			'AD_FIRSTPOST'	=> (!empty($this->config['ad_firstpost'])) ? true : false,
			'AD_TWITTER'	=> (!empty($this->config['ad_twitter'])) ? true : false,
			'AD_FORUM7'		=> (!empty($this->config['ad_forum7'])) ? true : false,
			'AD_FORUM3'	=> (!empty($this->config['ad_forum3'])) ? true : false,
			'AD_FACEBOOKPAGE'	=> (!empty($this->config['ad_facebookpage'])) ? true : false,
			'AD_VK'			=> (!empty($this->config['ad_vk'])) ? true : false,
			'AD_ALL'		=> (!empty($this->config['ad_all'])) ? true : false,
			'AD_CODE'		=> isset($config['sidebar_ad_code']) ? $config['sidebar_ad_code'] : '',
			'AD_URLPAGE'		=> isset($config['sidebar_ad_urlpage']) ? $config['sidebar_ad_urlpage'] : '',
			'AD_CODE_SLOT'		=> isset($config['sidebar_ad_code_slot']) ? $config['sidebar_ad_code_slot'] : '',
			'AD_WIDTH'		=> isset($config['sidebar_width']) ? $config['sidebar_width'] : '',
			'AD_HEIGHT'		=> isset($config['sidebar_height']) ? $config['sidebar_height'] : '',
			'AD_TEXT'		=> isset($config['sidebar_text']) ? $config['sidebar_text'] : '',
			'U_ACTION'		=> $this->u_action,
			'SIDEBAR_VERSION'		=> $this->config['SIDEBAR_VERSION'],
			'S_VERSION_UP_TO_DATE'	=> $this->sidebar_version_compare($this->config['SIDEBAR_VERSION']),
		));
	}
	/**
	* Obtains the latest version information
	* @param string    $current_version    version information
	* @param int       $ttl             Cache version information for $ttl seconds. Defaults to 86400 (24 hours).
	* 
	* @return bool       false on failure.
	**/
	function sidebar_version_compare($current_version = '', $version_up_to_date = true, $ttl = 86400)
	{
		global $cache, $template;

		$info = $cache->get('sidebar_versioncheck');

		if ($info === false)
		{
		$errstr = '';
		$errno = 0;

		$info = get_remote_file('http://www.microcosmoacquari.it/forum/', '/sidebar', 'sidebar_ext.txt', $errstr, $errno);
		if ($info === false)
		{
			$template->assign_var('S_VERSIONCHECK_FAIL', true);
			$cache->destroy('sidebar_versioncheck');
		}
		}

		if ($info !== false)
	{
		$cache->put('sidebar_versioncheck', $info, $ttl);
		$latest_version_info = explode("\n", $info);

		$latest_version = strtolower(trim($latest_version_info[0]));
		$current_version = strtolower(trim($current_version));
		$version_up_to_date = version_compare($current_version, $latest_version, '<') ? false : true;

		$template->assign_vars(array(
			'U_VERSIONCHECK'	=> ($version_up_to_date) ? false : $latest_version_info[1],
			'S_VERSIONOLD'		=> $current_version,
			'S_VERSIONNEW'		=> ($version_up_to_date) ? false : $latest_version_info[0],
		));
	}

		return $version_up_to_date;
	}
}