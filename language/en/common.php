<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LAST_TOPICS'			=> 'Last Topics',
	'LAST_POSTS'			=> 'Last Posts',
	'TOP_TOPICS'			=> 'Top Topics',
	'ACP_TTT_TITLE'			=> 'General Settings',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	'ACP_POSITION'		=> 'Position of extension&apos;s box',
	'ACP_POSITION_DESC'	=> 'ATTENTION! If you want to use the position "After forum list but before login box", you must have a style updated to phpBB 3.1.1',
	'ACP_GUEST'		=> 'Show box to guest',
	'ACP_NUMBER'		=> 'Number of topic/post extracted',
	'ACP_NUMBER_DESC'	=> 'If you insert a number of topic that a normal user cannot read, users have a page with error!',
	'ACP_DATA'		=> 'Default time of top topics',
	'ACP_IMPORTANT'		=> 'Topics&apos; type that you want to show',
	'ACP_FORUM'		=> 'Forums that you don&apos;t want to show',
	'ACP_FORUM_DESC'	=> 'You must insert the forum&apos;ID with comma but without spaces: for example 1,2,3<br />If you don&apos;t want to exclude any forum you mustn&apos;t insert any.',
	'BEFORE_FORUMLIST'		=> 'Before forum list and before link "mark forum read"',
	'AFTER_FORUMLIST'		=> 'After forum list and after login box',
	'AFTER_MARKFORUM'		=> 'Before forum list but after link "mark forum read"',
	'BEFORE_LOGIN' 			=> 'After forum list but before login box',
	'ALL_FOOTER'			=> 'On footer of all pages of forum',
	'ACP_TTT_SAVED'			=> 'Settings of Top Ten Topics save',
	'SIXMONTH' => 'last 6 months',
	'TWELVEMONTH' => 'last 12 months',
	'ONEMONTH' => 'last month',
	'THREEMONTH' => 'last 3 months',
	'ALL_TOPICS' => 'All',
	'TTT_BASED' => 'based on the <a href="http://giannidose.altervista.org">Micogian</a>&apos;s MOD',
	'TNORMAL' => 'Only normal topic',
	'TIMPORTANT' => 'Normal and important topics',
	'TANNUNCE' => 'Normal, important and sticky topics',
	'TGLOBAL' => 'Normal, important, sticky and global sticky topics',
));
