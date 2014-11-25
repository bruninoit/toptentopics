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
	'ACP_TTT_TITLE'			=> 'Impostazioni generali',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	'ACP_POSITION'		=> 'Scegli la posizione del box nell&apos;indice',
	'ACP_GUEST'		=> 'Vuoi che sia mostrata agli utenti non registrati?',
	'ACP_NUMBER'		=> 'Numero di topic e post estratti',
	'BEFORE_FORUMLIST'		=> 'Prima della lista dei forum',
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate'
));
