<?php
/**
*
* @package menubar
* @copyright (c) 2015 xaocZ ( CabinetAdmina.ru )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace xaocz\menubar\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	protected $auth;
	protected $config;
	protected $config_text;
	protected $request;
	protected $template;
	protected $user;
	protected $db;
	protected $phpbb_root_path;
	protected $php_ext;
	
	/**
	* Constructor
	*/
	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\request\request_interface $request, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $phpbb_root_path, $php_ext)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->config_text = $config_text;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->db = $db;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'						=> 'add_page_header_link',
		);
	}

	public function add_page_header_link($event)
	{
		$this->template->assign_vars(array(
			'S_MENUBAR'						=> $this->config['menubar_on'],
		));

		$menubar_head_data = $this->config_text->get_array(array(
			'menubar_head',
		));
		$menubar_head = $menubar_head_data['menubar_head'];
		$this->template->assign_vars(array(
			'S_MENUBAR_HEAD'				=> htmlspecialchars_decode($menubar_head),
		));

		$menubar_content_data = $this->config_text->get_array(array(
			'menubar_content',
		));
		$menubar_content = $menubar_content_data['menubar_content'];
		$this->template->assign_vars(array(
			'S_MENUBAR_CONTENT'				=> htmlspecialchars_decode($menubar_content),
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_INDEX'				=> $this->config['menubar_index'],
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_NEW_CLASS'			=> $this->config['menubar_newclass'],
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_STYLES'				=> $this->config['menubar_styles'],
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_FIXED'				=> $this->config['menubar_fixed'],
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_FIXED_SCROLL'		=> $this->config['menubar_fixedscroll'],
		));

		$this->template->assign_vars(array(
			'S_MENUBAR_POSITION'		=> $this->config['menubar_position'],
		));
	}
}
