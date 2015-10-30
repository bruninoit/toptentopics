<?php
/**
*
* Top Ten Topics extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 brunino <http://www.brunino.altervista.org>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'LAST_TOPICS'			=> 'Last Topics',
	'LAST_POSTS'			=> 'Last Posts',
	'TOP_TOPICS'			=> 'Top Topics',
	'ACP_TTT_TITLE'			=> 'General Settings',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	'ACP_POSITION'			=> 'Position of extension box',
	'ACP_POSITION_DESC'	=> 'Note ! If you want to use the position “After forums list but before login box”, you must have a style updated to phpBB 3.1.1.',
	'ACP_GUEST'			=> 'Show box to guests',
	'ACP_NUMBER'		=> 'Number of extracted topics/posts',
	'ACP_NUMBER_DESC'	=> 'If you enter a number of topics higher than an user can view, the page will generate an error.',
	'ACP_DATA'			=> 'Default time of top topics',
	'ACP_IMPORTANT'		=> 'Choose which types of topic to display',
	'ACP_FORUM'			=> 'Choose which types of forum to display',
	'ACP_FORUM_DESC'	=> 'You must enter the forums ID to exclude, only separated by commas without spaces, for example 1,2,3.<br>If you do not want to exclude any forum leave this field empty. The extension do not show the topics to users where they do not have the necessary permissions.',
	'BEFORE_FORUMLIST'		=> 'Before forums list and before link “mark forum read”',
	'AFTER_FORUMLIST'		=> 'After forums list and after login box',
	'AFTER_MARKFORUM'		=> 'Before forum list but after link “mark forum read”',
	'BEFORE_LOGIN' 			=> 'After forum list but before login box',
	'ALL_FOOTER'			=> 'On footer of all pages of forum',
	'ACP_TTT_SAVED'			=> 'Settings of Top Ten Topics have been updated.',
	'SIXMONTH' 			=> 'last 6 months',
	'TWELVEMONTH' 		=> 'last 12 months',
	'ONEMONTH' 			=> 'last month',
	'THREEMONTH' 		=> 'last 3 months',
	'ALL_TOPICS' 		=> 'All',
	'TTT_BASED' 		=> 'based on the <a href="http://giannidose.altervista.org">Micogian</a>&apos;s MOD',
	'TNORMAL' 			=> 'Only normal topic',
	'TIMPORTANT'		=> 'Normal and sticky topics',
	'TANNUNCE' 			=> 'Normal, sticky and announcement topics',
	'TGLOBAL' 			=> 'Normal, sticky, announcement and global announcement topics',
	'TTT_COPYRIGHT'		=> 'Top Ten Topic &copy; Brunino - Carlo - Sir Xiradorn - Micogian - (phpbbitalia.net)'
));
