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
	'LAST_TOPICS'			=> 'Ultimi Argomenti',
    'LAST_POSTS'			=> 'Ultimi Messaggi',
	'TOP_TOPICS'			=> 'Argomenti pi&ugrave; visti',
	'ACP_TTT_TITLE'			=> 'Impostazioni generali',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	'ACP_POSITION'		=> 'Scegli la posizione del box nell&apos;indice',
	'ACP_POSITION_DESC'	=> 'N.B. Per usare la posizione "Dopo la lista dei forum, ma prima del box di login" devi avere lo/gli stile/i in uso aggiornato/i almeno a phpBB 3.1.1',
	'ACP_GUEST'		=> 'Vuoi che sia mostrata agli utenti non registrati?',
	'ACP_NUMBER'		=> 'Numero di topic e post estratti',
	'ACP_NUMBER_DESC'	=> 'Se inserisci un numero di topic maggiore di quanti l&apos;utente pu&ograve; visualizzarli, la pagina generer&agrave; un errore.',
	'ACP_DATA'		=> 'Periodo predefinito dei topic pi&ugrave; visti',
	'ACP_IMPORTANT'		=> 'Scegli quali tipi di topic visualizzare',
	'ACP_FORUM'		=> 'Sezioni da escludere nella visualizzazioni',
	'ACP_FORUM_DESC'	=> 'Devi inserire gli ID delle sezioni da escludere, separate solo da virgole senza spazi: ad esempio 1,2,3<br>Se non vuoi escludere nessuna sezione lascia questo campo vuoto. Considera che gi&agrave; l&apos;estensione non mostra agli utenti i topic postati nei forum a cui loro non hanno accesso.',
	'BEFORE_FORUMLIST'		=> 'Prima della lista dei forum e del link "segna come gi&agrave; letti"',
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum e del box di login',
	'AFTER_MARKFORUM'		=> 'Prima della lista dei forum, ma dopo link "segna come gi&agrave; letti"',
	'BEFORE_LOGIN' 			=> 'Dopo la lista dei forum, ma prima del box di login',
	'ALL_FOOTER'			=> 'In tutte le pagine, nel footer',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate',
	'SIXMONTH' => 'ultimi 6 mesi',
	'TWELVEMONTH' => 'ultimi 12 mesi',
	'ONEMONTH' => 'ultimo mese',
	'THREEMONTH' => 'ultimi 3 mesi',
	'ALL_TOPICS' => 'Tutti',
	'TTT_BASED' => 'basata sulla MOD di <a href="http://giannidose.altervista.org">Micogian</a>',
	'TNORMAL' => 'Solo topic normali',
	'TIMPORTANT' => 'Topic normali e importanti',
	'TANNUNCE' => 'Topic normali, importanti e annunci',
	'TGLOBAL' => 'Topic normali, importanti, annunci e annunci globali',
));
