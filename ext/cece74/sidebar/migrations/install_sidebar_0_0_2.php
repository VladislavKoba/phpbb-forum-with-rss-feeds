<?php
/**
*
* @package Sidebar
* @copyright (c) 2015 Cece74
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace cece74\sidebar\migrations;

class install_sidebar_0_0_2 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['sidebar_version']) && version_compare($this->config['sidebar_version'], '0.0.2', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('ad_status', 1)),
			array('config.add', array('ad_type', 1)),
			array('config.add', array('ad_facebook', 1)),
			array('config.add', array('ad_twitter', 1)),
			array('config.add', array('ad_tuenti', 1)),
			array('config.add', array('ad_sonico', 1)),
			array('config.add', array('ad_friendfeed', 1)),
			array('config.add', array('ad_digg', 1)),
			array('config.add', array('ad_delicious', 1)),
			array('config.add', array('ad_vk', 1)),
			array('config.add', array('ad_tumblr', 1)),
			array('config.add', array('ad_google', 1)),
			array('config.add', array('ad_reddit', 1)),

			array('config.add', array('sidebar_version', '0.0.2')),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'AD_ACP'
			)),
			array('module.add', array(
				'acp',
				'AD_ACP',
				array(
					'module_basename'	=> '\cece74\sidebar\acp\sidebar_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}