<?php
namespace afdesign\responsiveasyncsocialshare\acp;
class main_module
{
	var $u_action;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('acp/common');
		$this->tpl_name = 'responsiveasyncsocialshare_body';
		$this->page_title = $user->lang('RASH_PCA_PAGE');
		add_form_key('afdesign/responsiveasyncsocialshare');
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('afdesign/responsiveasyncsocialshare'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('rash_vbppcf', $request->variable('rash_vbppcf', '', true));
			trigger_error($user->lang('RASH_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'RASH_VBPPCF'				=> $config['rash_vbppcf'],
		));
	}
}
