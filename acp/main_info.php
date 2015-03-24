<?php
/** 
* 
* @package StaffIt - Top Ten Topics 
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 

namespace staffit\toptentopics\acp;
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\staffit\toptentopics\acp\main_module',
			'title'		=> 'ACP_TTT_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_TTT_TITLE', 'auth' => 'ext_staffit/toptentopics && acl_a_board', 'cat' => array('ACP_TTT_TITLE')),
			),
		);
	}
}
