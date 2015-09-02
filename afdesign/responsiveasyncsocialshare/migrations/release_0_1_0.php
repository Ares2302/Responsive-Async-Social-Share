<?php
namespace afdesign\responsiveasyncsocialshare\migrations;
class release_0_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		//return isset($this->config['banner']);
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('rash_vbppcf', '')),
		  array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'RASH_CATEGORY'
			)),
			array('module.add', array(
				'acp',
				'RASH_CATEGORY',
				array(
					'module_basename'	=> '\afdesign\responsiveasyncsocialshare\acp\main_module',
					'modes'			=> array('settings')
				),
			)),
		);
	}
}
