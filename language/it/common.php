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
	'ACP_TTT_TITLE'			=> 'Impostazioni Top Ten Topics',
	'ACP_SETTING_INFO'		=> 'Scegli la posizione del box nell&apos;indice',
	'BEFORE_FORUMLIST'		=> 'Prima della lista dei forum',
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate'
));
