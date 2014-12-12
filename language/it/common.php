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
	'ACP_DATA'		=> 'Periodo predefinito dei topic pi&ugrave; visti',
	'BEFORE_FORUMLIST'		=> 'Prima della lista dei forum e del link "segna come gi&agrave; letti"',
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum',
	'AFTER_MARKFORUM'		=> 'Prima della lista dei forum, ma dopo link "segna come gi&agrave; letti"',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate',
	'SIXMONTH' => 'ultimi 6 mesi',
	'TWELVEMONTH' => 'ultimi 12 mesi',
	'ONEMONTH' => 'ultimo mese',
	'THREEMONTH' => 'ultimi 3 mesi',
	'ALL_TOPICS' => 'Tutti',
	'BASED' => 'basata sulla MOD di <a href="http://giannidose.altervista.org>Micogian</a>'
));
