<?php
/**
*
* Top Ten Topics extension for the phpBB Forum Software package.
*
* @copyright (c) 2015 brunino <http://www.brunino.altervista.org>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'LAST_TOPICS'			=> 'آخر المواضيع',
	'LAST_POSTS'			=> 'آخر المشاركات',
	'TOP_TOPICS'			=> 'أكثر المواضيع مُشاهدة',
	'ACP_TTT_TITLE'			=> 'الإعدادات',
	'ACP_TTT_CATEGORY'		=> 'أعلى 10 مواضيع',
	'ACP_POSITION'		=> 'المكان ',
	'ACP_POSITION_DESC'	=> 'ملاحظة ! يجب أن يكون لديك استايل مُحدث إلى phpBB 3.1.1 إذا تريد تحديد الخيار : بعد قائمة المنتديات / قبل تسجيل الدخول.',
	'ACP_GUEST'		=> 'السماح للزائرين ',
	'ACP_NUMBER'		=> 'عدد المواضيع / المُشاركات ',
	'ACP_NUMBER_DESC'	=> 'قد تواجه مُشكلة بالصفحة إذا أدخلت قيمة أكبر من أن العضو يستطيع مُشاهدته.',
	'ACP_DATA'		=> 'عرض المواضيع منذ ',
	'ACP_IMPORTANT'		=> 'حدد نوع المواضيع لعرضها ',
	'ACP_FORUM'		=> 'استبعاد المنتديات ',
	'ACP_FORUM_DESC'	=> 'يجب عليك كتابة رقم المنتدى لإستثنائه من العرض , اكتب علامة الفاصلة ( , ) بين كل رقم وبدون مسافات , مثال : 1,2,3.<br>اترك هذا الحقل فارغاً لعرض المواضيع من جميع المنتديات. الأعضاء الذين لا يملكون الصلاحيات المطلوبة لن يستطيعوا مُشاهدة هذه الإضافة.',
	'BEFORE_FORUMLIST'		=> 'قبل قائمة المنتديات / قبل رابط "اعتبر جميع المنتديات مقروءة"',
	'AFTER_FORUMLIST'		=> 'بعد قائمة المنتديات / بعد تسجيل الدخول',
	'AFTER_MARKFORUM'		=> 'قبل قائمة المنتديات / بعد رابط "اعتبر جميع المنتديات مقروءة"',
	'BEFORE_LOGIN' 			=> 'بعد قائمة المنتديات / قبل تسجيل الدخول',
	'ALL_FOOTER'			=> 'أسفل  جميع صفحات المنتدى',
	'ACP_TTT_SAVED'			=> 'تم تحديث الإعدادات بنجاح.',
	'SIXMONTH' => 'آخر 6 شهور',
	'TWELVEMONTH' => 'آخر 12 شهر',
	'ONEMONTH' => 'آخر شهر',
	'THREEMONTH' => 'آخر 3 شهور',
	'ALL_TOPICS' => 'الجميع',
	'TTT_BASED' => 'يعتمد على الهاك <a href="http://giannidose.altervista.org">Micogian</a>',
	'TNORMAL' => 'المواضيع العادية فقط',
	'TIMPORTANT' => 'المواضيع العادية والمُثبتة',
	'TANNUNCE' => 'المواضيع العادية والمُثبتة والإعلانات',
	'TGLOBAL' => 'المواضيع العادية والمُثبتة والإعلانات والإعلانات العامة',
));
