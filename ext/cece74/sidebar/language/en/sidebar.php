<?php
/**
*
* sharethis [English]
*
* @package language Sidebar
* @copyright (c) 2015 Cece74
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'AD_SELECT'				=> 'Sidebar',
	// Share This viewtopic.php
	'AD_FIRSTPOST'		=> 'After first post',
	'SHARE_THIS_TWITTER'		=> 'Botton the topic',
	'AD_SIDEBAR_FORUM7'			=> 'Adsense home position 7',
	'AD_SIDEBAR_FORUM3'	=> 'Adsense home position 2',
	'AD_SIDEBAR_FACEBOOKPAGE'	=> 'Facebook position 2',
	'SHARE_THIS_VK'			=> 'After the fifth post',
	'SHARE_THIS_ALL'		=> 'Share All',
));