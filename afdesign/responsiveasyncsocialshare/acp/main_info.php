<?php
namespace afdesign\responsiveasyncsocialshare\acp;
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\afdesign\responsiveasyncsocialshare\acp\main_module',
			'title'		=> 'RASH_PCA_PAGE',
			'version'	=> '0.1.0-a1',
			'modes'		=> array(
				'settings'	=> array('title' => 'RASH_PCA_PAGE', 'auth' => 'ext_afdesign/responsiveasyncsocialshare && acl_a_board', 'cat' => array('RASH_PCA_PAGE')),
			),
		);
	}
}
