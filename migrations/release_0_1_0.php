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
		return isset($this->config['toptentopics_guest']);
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('toptentopics_position', 0)),
			array('config.add', array('toptentopics_number', 10)),
			array('config.add', array('toptentopics_guest', 1)),
			array('config.add', array('toptentopics_data', 3)),
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
}
