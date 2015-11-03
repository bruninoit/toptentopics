<?php
/** 
* 
* @package StaffIt - Top Ten Topics 
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace staffit\toptentopics\migrations;
class release_0_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['toptentopics_forum']);
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('toptentopics_position', 0)),
			array('config.add', array('toptentopics_important', 1)),
			array('config.add', array('toptentopics_number', 10)),
			array('config.add', array('toptentopics_guest', 1)),
			array('config.add', array('toptentopics_data', 3)),
			array('config.add', array('toptentopics_forum', 1,2)),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TTT_CATEGORY'
			)),
			array('module.add', array(
				'acp',
				'ACP_TTT_CATEGORY',
				array(
					'module_basename'	=> '\staffit\toptentopics\acp\main_module',
					'modes'			=> array('settings')
				),
			)),
		);
	}
	public function revert_data()
	{
		return array(
			array('config.remove', array('toptentopics_position')),
			array('config.remove', array('toptentopics_important')),
			array('config.remove', array('toptentopics_number')),
			array('config.remove', array('toptentopics_guest')),
			array('config.remove', array('toptentopics_data')),
			array('config.remove', array('toptentopics_forum')),
			array('module.remove', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TTT_CATEGORY'
			)),
			array('module.remove', array(
				'acp',
				'ACP_TTT_CATEGORY',
				array(
					'module_basename'	=> '\staffit\toptentopics\acp\main_module',
					'modes'			=> array('settings')
				),
			)),
		);
	}
}
