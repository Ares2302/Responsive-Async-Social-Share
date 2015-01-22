<?php
/**
*
* @package StaffIt - Top Ten Topics
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
if (!defined('IN_PHPBB'))
{
exit;
}
if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'L_RASH_VBPPCF_DESC'	=> 'Imposta su sì se vuoi che venga visualizzato il box "condividi" sotto il primo post di ogni topic',
'RASH_VBPPCF' => '',
));
