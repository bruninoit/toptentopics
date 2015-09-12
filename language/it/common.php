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
	'LAST_TOPICS'			=> 'Ultimi Topic',
    'LAST_POSTS'			=> 'Ultimi Post',
	'TOP_TOPICS'			=> 'Argomenti più visti',
	'ACP_TTT_TITLE'			=> 'Impostazioni generali',
	'ACP_TTT_CATEGORY'		=> 'Top Ten Topics',
	'ACP_POSITION'		=> 'Scegli la posizione del box nell’indice',
	'ACP_POSITION_DESC'	=> 'N.B. Per usare la posizione "Dopo la lista dei forum, ma prima del box di login" devi avere lo/gli stile/i in uso aggiornato/i almeno a phpBB 3.1.1.',
	'ACP_GUEST'		=> 'Vuoi che sia mostrata agli utenti non registrati?',
	'ACP_NUMBER'		=> 'Numero di topic e post estratti',
	'ACP_NUMBER_DESC'	=> 'Se inserisci un numero di topic maggiore di quanti lutente può visualizzare, la pagina genererà un errore.',
	'ACP_DATA'		=> 'Periodo predefinito dei topic più visti',
	'ACP_IMPORTANT'		=> 'Scegli quali tipi di topic visualizzare',
	'ACP_FORUM'		=> 'Sezioni da escludere',
	'ACP_FORUM_DESC'	=> 'Devi inserire gli ID delle sezioni da escludere, separati solo da virgole senza spazi: ad esempio 1,2,3.<br>Se non vuoi escludere nessuna sezione lascia questo campo vuoto. Considera che lestensione non mostra agli utenti i topic postati nei forum a cui loro non hanno accesso.',
	'BEFORE_FORUMLIST'		=> 'Prima della lista dei forum e del link "segna come gi&agrave; letti"',
	'AFTER_FORUMLIST'		=> 'Dopo la lista dei forum e del box di login',
	'AFTER_MARKFORUM'		=> 'Prima della lista dei forum, ma dopo link "segna come gi&agrave; letti"',
	'BEFORE_LOGIN' 			=> 'Dopo la lista dei forum, ma prima del box di login',
	'ALL_FOOTER'			=> 'In tutte le pagine, nel footer',
	'ACP_TTT_SAVED'			=> 'Impostazioni della Top Ten Topics aggiornate.',
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
