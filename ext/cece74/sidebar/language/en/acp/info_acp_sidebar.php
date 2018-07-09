<?php
/**
*
* sharethis [English]
*
* @package language Sidebar
* @copyright (c) 2015 cece74
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
	// ACP
	'AD_ACP'		=> 'Sidebar Extension',
    'AD_TITLE'		=> 'Sidebar Extension Settings',
	'AD_EXPLAIN'	=> 'Configure Sidebar forum.',	
	'SIDEBAR_SIDEBAR_MOD'	=> 'Sidebar',
	'AD_CONFIG'		=> 'Settings',
	'AD_SELECT'		=> 'Sidebar Slot',
	'AD_VERSION_OLD'	=> 'Current version of the Extension',
	'AD_VERSION_NEW'	=> 'Latest version of the Extension',
	'AD_SAVED'		=> 'Changes Saved.',
	'AD_STATUS'		=> 'Enable Sidebar Extension',
	'AD_FIRSTPOST'	=> 'Active Slot 3: Feed show',
	'AD_TWITTER'	=> 'Bottom the topic',
	'AD_FORUM7'		=> 'View Sidebar in Viewtopic and Viewforum',
	'AD_FORUM3' 	=> 'Width Sidebar',
	'AD_FACEBOOKPAGE' 	=> 'Active slot 2: Facebook fan page',
	'AD_VK'			=> 'After the fifth post',
	'AD_ALL'		=> 'Footer all pages',
	'ACP_15'				=> '15%',
	'ACP_20'				=> '20%',	
	'ACP_AD_CODE'				=> 'Url Feed',
	'ACP_AD_CODE_EXPLAIN'		=> 'Enter the url feed for slider-feed.',
	'ACP_AD_URLPAGE'				=> 'Url Page Facebook',
	'ACP_AD_URLPAGE_EXPLAIN'		=> 'Enter complete url your page fan Facebook.',	
	'ACP_AD_CODE_SLOT'				=> 'Title slot 3',	
	'ACP_AD_CODE_SLOT_EXPLAIN'		=> 'Enter the title for slot-3 sidebar.',	
	'ACP_SIDEBAR_WIDTH'				=> 'Width',
	'ACP_SIDEBAR_WIDTH_EXPLAIN'				=> 'Width banner Adsense',
	'ACP_SIDEBAR_HEIGHT'				=> 'Height',
	'ACP_SIDEBAR_HEIGHT_EXPLAIN'				=> 'Height banner Adsense',
	'ACP_SIDEBAR_TEXT'				=> 'Insert code HTML',
	
	// Share Type
	'AD_TYPE'			=> 'Sidebar Switch',
	'AD_TYPE_EXPLAIN'	=> 'Show Sidebar Left or Right',
));