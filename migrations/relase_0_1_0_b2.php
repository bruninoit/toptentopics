<?php
namespace staffit\toptentopics\migrations;
class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['toptentopics']);
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('toptentopics', 0)),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_TTT_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_TTT_TITLE',
				array(
					'module_basename'	=> '\astaffit\toptentopics\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
