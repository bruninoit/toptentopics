You should use the UTF8 variant instead of ".


[code]			    <option value="5"<!-- IF ACP_DATA eq '5' --> selected<!-- ENDIF --> /> {L_ONEMONTH}</option>
			    <option value="4"<!-- IF ACP_DATA eq '4' --> selected<!-- ENDIF --> /> {L_THREEMONTH}</option>
			    <option value="1"<!-- IF ACP_DATA eq '1' --> selected<!-- ENDIF --> /> {L_SIXMONTH}</option>
			    <option value="2"<!-- IF ACP_DATA eq '2' --> selected<!-- ENDIF --> /> {L_TWELVEMONTH}</option>
			    <option value="3"<!-- IF ACP_DATA eq '3' --> selected<!-- ENDIF --> /> {L_ALL_TOPICS}</option>
			    </select>[/code]Magic numbers. Please use a number which is more descriptive.

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
