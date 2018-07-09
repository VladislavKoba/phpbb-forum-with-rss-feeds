<?php
/**
*
* @package Sidebar
* @copyright (c) 2015 Cece74
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sidebar\acp;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package module_install
*/
class sidebar_info
{
	function module()
	{
		return array(
			'filename'	=> '\cece74\sidebar\acp\sidebar_module',
			'title'		=> 'AD_ACP',
			'version'	=> '0.0.3',
			'modes'		=> array(
				'settings'	=> array('title' => 'AD_CONFIG', 'auth'	=> 'ext_cece74/sidebar', 'cat'	=> array('SIDEBAR_SIDEBAR_MOD')),
			),
		);
	}
}