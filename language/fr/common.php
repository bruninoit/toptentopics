<?php
/**
*
* Top Ten Topics extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
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
	'LAST_TOPICS'			=> 'Derniers sujets',
	'LAST_POSTS'			=> 'Derniers messages',
	'TOP_TOPICS'			=> 'Top des sujets',
	'ACP_TTT_TITLE'			=> 'Paramètres généraux',
	'ACP_TTT_CATEGORY'		=> 'Top 10 des sujets',
	'ACP_POSITION'		=> 'Emplacement du bloc de l’extension',
	'ACP_POSITION_DESC'	=> 'Merci de noter que pour utiliser l’emplacement : « Après la liste des forums mais avant la boite de connexion », le style utilisé doit être au moins compatible avec la version 3.1.1 ou ultérieure de phpBB.',
	'ACP_GUEST'			=> 'Affiche le bloc aux invités',
	'ACP_NUMBER'		=> 'Nombre de sujets et messages affichés',
	'ACP_NUMBER_DESC'	=> 'Permet de saisir un nombre de sujets à afficher qui ne doit pas dépasser celui qu’un utilisateur peut avoir, auquel cas contraire une page d’erreur va s’afficher.',
	'ACP_DATA'			=> 'Période par défaut du top des sujets',
	'ACP_IMPORTANT'		=> 'Choisir quels types de sujets à afficher',
	'ACP_FORUM'			=> 'Choisir les forums sources',
	'ACP_FORUM_DESC'	=> 'Permet de saisir les ID des forums à exclure, séparées par une virgule sans espace, comme par exemple 1,2,3.<br>Pour n’exclure aucun forum, laisser ce champ vide. L’extension prend en compte les permissions des utilisateurs dans l’affichage.',
	'BEFORE_FORUMLIST'		=> 'Avant la liste des forums et avant le lien : « Marquer tous les forums comme lus »',
	'AFTER_FORUMLIST'		=> 'Après la liste des forums et après la boite de connexion',
	'AFTER_MARKFORUM'		=> 'Avant la liste des forums mais après le lien : « Marquer tous les forums comme lus »',
	'BEFORE_LOGIN' 			=> 'Après la liste des forums mais avant la boite de connexion',
	'ALL_FOOTER'			=> 'Dans le pied de page de toutes les pages du forum',
	'ACP_TTT_SAVED'			=> 'Les paramètres du top 10 des sujets ont été mis à jour.',
	'SIXMONTH' 			=> 'Les 6 derniers mois',
	'TWELVEMONTH' 		=> 'Les 12 derniers mois',
	'ONEMONTH' 			=> 'Le mois dernier',
	'THREEMONTH' 		=> 'Les 3 derniers mois',
	'ALL_TOPICS' 		=> 'Tous',
	'TTT_BASED' 		=> 'basé sur le MOD de <a href="http://giannidose.altervista.org">Micogian</a>.',
	'TNORMAL' 			=> 'Uniquement les sujets normaux',
	'TIMPORTANT' 		=> 'Les sujets normaux et les post-it',
	'TANNUNCE' 			=> 'Les sujets normaux, les post-it et les annonces',
	'TGLOBAL' 			=> 'Les sujets normaux, les post-it, les annonces et les annonces globales',
	'TTT_COPYRIGHT'		=> 'Top Ten Topic &copy; Brunino - Carlo - Sir Xiradorn - Micogian - (phpbbitalia.net)'
));
