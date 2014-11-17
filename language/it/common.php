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
	'LAST_TOPICS'			=> 'Ultimi Argomenti',
    'LAST_POSTS'			=> 'Ultimi Messaggi',
	'TOP_TOPICS'			=> 'Argomenti pi&ugrave; visti',
));
