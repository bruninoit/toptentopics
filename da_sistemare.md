In the [b]acp/main_info.php[/b] file (line 18):
[code]			'version'	=> '0.1.0-b2',[/code]
I think that the version should be [b]1.0.0[/b]

In the [b]acp/main_module.php[/b] file (lines 35 to 43):
[code]		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'ACP_POSITION'				=> $config['toptentopics_position'],
			'ACP_NUMBER'				=> $config['toptentopics_number'],
			'ACP_GUEST'				=> $config['toptentopics_guest'],
			'ACP_IMPORTANT'				=> $config['toptentopics_important'],
			'ACP_DATA'				=> $config['toptentopics_data'],
			'ACP_FORUM'				=> $config['toptentopics_forum']
		));[/code]
There are some spaces, can be improved by removing unnecessary spaces in code.

In the [b]event/listener.php[/b] file (some lines...):
There are some spaces and new lines, can be improved by removing unnecessary spaces/blank lines in code.

Lines 89 to 105:
[code]//funzione month
function mod_data($data_cor)
{
$data_cor = str_replace("Jan","gen", $data_cor);
$data_cor = str_replace("Feb","feb", $data_cor);
$data_cor = str_replace("Mar","mar", $data_cor);
$data_cor = str_replace("Apr","apr", $data_cor);
$data_cor = str_replace("May","mag", $data_cor);
$data_cor = str_replace("Jun","giu", $data_cor);
$data_cor = str_replace("Jul","lug", $data_cor);
$data_cor = str_replace("Aug","ago", $data_cor);
$data_cor = str_replace("Sep","set", $data_cor);
$data_cor = str_replace("Oct","ott", $data_cor);
$data_cor = str_replace("Nov","nov", $data_cor);
$data_cor = str_replace('Dec','dic', $data_cor);
return $data_cor;
}[/code]
[c]//funzione month[/c] comments in English please.
Hardcoded language and [b][color=#FF0000]do not understand this part[/color] (english, Italian)[/b]. :?: 

Line 92: [c]$data_cor = str_replace("Jan","gen", $data_cor);[/c] [b]Jan[/b] - [b]gen[/b]
Line 96: [c]$data_cor = str_replace("May","mag", $data_cor);[/c] [b]May[/b] - [b]mag[/b]
Line 97: [c]$data_cor = str_replace("Jun","giu", $data_cor);[/c] [b]Jun[/b] - [b]giu[/b]
Line 98: [c]$data_cor = str_replace("Jul","lug", $data_cor);[/c] [b]Jul[/b] - [b]lug[/b]
Line 100: [c]$data_cor = str_replace("Sep","set", $data_cor);[/c] [b]Sep[/b] - [b]set[/b]
Line 101: [c]$data_cor = str_replace("Oct","ott", $data_cor);[/c] [b]Oct[/b] - [b]ott[/b]

[b]Line 139:[/b]
[code]           // $last_topic_data[$n1]   		= $this->user->format_date($row1['topic_time'], "|d M|");[/code]
Commented line... if not used, delete it.

[b]Line 252:[/b]
[code]			//$last_post_link[$n4]   		= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $row4['forum_id'] . "&amp;t=" . $row4['topic_id'] . "p#" . $row4['topic_last_post_id']);[/code]
Commented line... if not used, delete it.

In the [b]language/en/common.php[/b] file (line 17):
[code]	'ACP_POSITION_DESC'	=> 'Note! If you want to use the position "After forums\'s list but before login box", you must have a style updated to phpBB 3.1.1',[/code]
You should use the UTF8 variant instead of \' and ".

[b]Line 24:[/b]
[code]	'ACP_FORUM_DESC'	=> 'You must enter the forum\'s ID to exclude, only separated by commas without spaces, for example 1,2,3 <br>If you don\'t want to exclude any forum leave this field empty. The extension doesn\'t show the topics to users where they don\'t have the necessary permissions..',[/code]
You should use the UTF8 variant instead of \' and ".

The text of the copyright extension is not correctly displayed.[/quote]

[quote="Paul"]Version number should be stable, and at least 1.0.0. The revision name (Especfially for the first revision) should be something more clear as bug fixed.

The description in the composer.json should be in English. The version in your composer.json doesn't match the submitted version.

Error.md should be removed.
If you want to include a readme (Which usefull information for the user!) it should be in English.

[code]			    <option value="5"<!-- IF ACP_DATA eq '5' --> selected<!-- ENDIF --> /> {L_ONEMONTH}</option>
			    <option value="4"<!-- IF ACP_DATA eq '4' --> selected<!-- ENDIF --> /> {L_THREEMONTH}</option>
			    <option value="1"<!-- IF ACP_DATA eq '1' --> selected<!-- ENDIF --> /> {L_SIXMONTH}</option>
			    <option value="2"<!-- IF ACP_DATA eq '2' --> selected<!-- ENDIF --> /> {L_TWELVEMONTH}</option>
			    <option value="3"<!-- IF ACP_DATA eq '3' --> selected<!-- ENDIF --> /> {L_ALL_TOPICS}</option>
			    </select>[/code]Magic numbers. Please use a number which is more descriptive.

From listener.php:
Please format your code before submitting your extension. Also, all comments should be in English.

[code]$data_cor = str_replace("Jan","gen", $data_cor);
$data_cor = str_replace("Feb","feb", $data_cor);
$data_cor = str_replace("Mar","mar", $data_cor);
$data_cor = str_replace("Apr","apr", $data_cor);
$data_cor = str_replace("May","mag", $data_cor);
$data_cor = str_replace("Jun","giu", $data_cor);
$data_cor = str_replace("Jul","lug", $data_cor);
$data_cor = str_replace("Aug","ago", $data_cor);
$data_cor = str_replace("Sep","set", $data_cor);
$data_cor = str_replace("Oct","ott", $data_cor);
$data_cor = str_replace("Nov","nov", $data_cor);
$data_cor = str_replace('Dec','dic', $data_cor);
return $data_cor;[/code]If this is displayed to the user it should be in the language files.

[code]$last_topic_data[$n1]   		= date("d/m",$row1['topic_time']); [/code]You should use $user->format_date.

[code]$this->template->assign_var('TIME_SELECTED', $data_views);
if ($data_views == '3')
{
$data_ini = '0' ;
}
if ($data_views == '1' )
{
$data_ini = $data_cor - 15811200 ;
}
if ($data_views == '2')
{
$data_ini = $data_cor - 31536000 ;
}
if ($data_views == '4')
{
$data_ini = $data_cor - 7905600 ;
}
if ($data_views == '5')
{
$data_ini = $data_cor - 2635200 ;
}[/code]Magic numbers.

[code]    if($forum_esclusi) $sql2 .= " AND tt.forum_id NOT IN($forum_esclusi)";[/code]All if statements should have curly braces. Also, you should use $db->sql_in_set instead of IN.

From language/en/common.php:
[code]	'ACP_POSITION'		=> 'Position of extension\'s box',[/code]You should use the UTF8 variant of '.
This applies to the italian language as well.

All css in toptentopics_body.html should be moved to th
