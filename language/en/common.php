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
));
