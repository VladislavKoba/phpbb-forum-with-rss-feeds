<?php
/**
*
* @package menubar
* @copyright (c) 2015 xaocZ ( CabinetAdmina.ru )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace xaocz\menubar\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class menubar_info
{
	function module()
	{
		return array(
			'filename'	=> '\xaocz\menubar\acp\menubar_module',
			'title'		=> 'ACP_MENUBAR',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'config_menubar'		=> array('title' => 'ACP_MENUBAR', 'auth' => 'ext_xaocz/menubar && acl_a_board', 'cat' => array('ACP_MENUBAR')),
			),
		);
	}
}