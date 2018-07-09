<?php
/**
*
* @package menubar
* @copyright (c) 2015 xaocZ ( CabinetAdmina.ru )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace xaocz\menubar\migrations;

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
    exit;
}

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['menubar_version']) && version_compare($this->config['menubar_version'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
		);
	}

	public function revert_schema()
	{
		return array(
		);
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('menubar_on', '0')),
			array('config_text.add', array('menubar_head', '')),
			array('config_text.add', array('menubar_content', '')),
			array('config.add', array('menubar_index', '1')),
			array('config_text.add', array('menubar_newclass', '')),
			array('config.add', array('menubar_styles', '0')),
			array('config.add', array('menubar_position', '0')),
			array('config.add', array('menubar_fixed', '0')),
			array('config_text.add', array('menubar_fixedscroll', '')),

			// Current version
			array('config.add', array('menubar_version', '1.0.0')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_MENUBAR')),
			array('module.add', array('acp', 'ACP_MENUBAR', array(
					'module_basename'	=> '\xaocz\menubar\acp\menubar_module',
					'module_langname'	=> 'ACP_MENUBAR_EXPLAIN',
					'module_mode'		=> 'config_menubar',
					'module_auth'		=> 'ext_xaocz/menubar && acl_a_board',
			))),
		);
	}
}
