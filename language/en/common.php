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
	'ACP_POSITION'		=> 'Index position of box',
	'ACP_GUEST'		=> 'Show box to guest',
	'ACP_NUMBER'		=> 'Number of topic/post extracted',
	'BEFORE_FORUMLIST'		=> 'Before forum list',
	'AFTER_FORUMLIST'		=> 'after forum list',
	'ACP_TTT_SAVED'			=> 'Settings of Top Ten Topics saved',
));
