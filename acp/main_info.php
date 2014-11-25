<?php
namespace staffit\toptentopics\acp;
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\staffit\toptentopics\acp\main_module',
			'title'		=> 'ACP_TTT_TITLE',
			'version'	=> '0.1.0-b2',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_TTT_TITLE', 'auth' => 'ext_staffit/toptentopics && acl_a_board', 'cat' => array('ACP_TTT_TITLE')),
			),
		);
	}
}
