<?php
/** 
* 
* @package StaffIt - Top Ten Topics 
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace staffit\toptentopics\acp;
class main_module
{
	var $u_action;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('acp/common');
		$this->tpl_name = 'toptentopics_body';
		$this->page_title = $user->lang('ACP_TTT_TITLE');
		add_form_key('staffit/toptentopics');
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('staffit/toptentopics'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('toptenttopics_forum', $request->variable('toptentopics_forum', '', true))
			$config->set('toptentopics_number', $request->variable('toptentopics_number', 0));
			$config->set('toptentopics_position', $request->variable('toptentopics_position', 0));
			$config->set('toptentopics_guest', $request->variable('toptentopics_guest', 0));
			$config->set('toptentopics_data', $request->variable('toptentopics_data', 0));
			$config->set('toptentopics_important', $request->variable('toptentopics_important', 0));
			trigger_error($user->lang('ACP_TTT_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ACP_POSITION'				=> $config['toptentopics_position'],
			'ACP_NUMBER'				=> $config['toptentopics_number'],
			'ACP_GUEST'				=> $config['toptentopics_guest'],
			'ACP_IMPORTANT'				=> $config['toptentopics_important'],
			'ACP_DATA'				=> $config['toptentopics_data'],
			'ACP_FORUM'				=> $config['toptentopics_forum']
		));
	}
}
