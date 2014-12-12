<?php
/** 
* 
* @package StaffIt - Top Ten Topics 
* @copyright (c) 2014 brunino
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2 
* 
*/ 
namespace staffit\toptentopics\event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */	
	protected $config;
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\auth\auth */
	protected $auth;
	/** @var \phpbb\user */
	protected $user;

	protected $root_path;
	
	protected $phpEx;

/** 
 	* Constructor 
 	* 
 	* @param \phpbb\config\config   		$config             	 Config object 
 	* @param \phpbb\db\driver\driver_interface      $db        	 	 DB object 
 	* @param \phpbb\template\template    		$template  	 	 Template object 
 	* @param \phpbb\auth\auth      			$auth           	 Auth object 
 	* @param \phpbb\use		     		$user           	 User object 
 	* @param	                		$root_path          	 Root Path object 
 	* @param                  	     		$phpEx          	 phpEx object 
 	* @return \staffit\toptentopics\event\listener 
 	* @access public 
 	*/ 


public function __construct(\phpbb\config\config $config, \phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\auth\auth $auth, \phpbb\user $user, $root_path, $phpEx) 
{
   $this->config = $config;
   $this->db = $db;
   $this->template = $template; 
   $this->auth = $auth;
   $this->user = $user;
   $this->root_path = $root_path;
   $this->phpEx   = $phpEx ;
}

static public function getSubscribedEvents()	
{
return array(			
'core.user_setup'						=> 'setup',	
);	
}	
public function setup($event)	{	
//file di lingua
$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'staffit/toptentopics',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
//lingua end

//codice start
 // MOD Topten Topics : Topics più recenti, Topics più visti e Posts più recenti 
// created by Micogian (Bingo)
//estensione by Brunino e Carlo
// configurazione: numero dei recods da visualizzare nella Lista
$list_rec = $this->config['toptentopics_number'] + 15 ;   // numero di records da estrarre dalla tabella (alcuni topics potrebbero non aver il permesso di lettura)
$list_view = $this->config['toptentopics_number'] ;  // sostituire il numero della variabile $lista se si desidera diminuire/aumentare il numero dei Topics 

//funzione taglia stringa
//tolta causa bug
    
    
//funzione mesi
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
}


//---------- 10 Topics più Recenti start -----------//
$sql1 = "SELECT tt.topic_id, tt.forum_id, tt.topic_title, tt.topic_time, tt.topic_moved_id, tt.topic_first_poster_name,
    ft.forum_id, ft.forum_name
    FROM " . TOPICS_TABLE . " tt, " . FORUMS_TABLE . " ft 
    WHERE tt.topic_type = 0
    AND tt.topic_moved_id = 0
    AND tt.forum_id = ft.forum_id
    AND tt.topic_visibility=1
    ORDER BY tt.topic_time DESC LIMIT 0,$list_rec";
$result1 = $this->db->sql_query($sql1);
    $n1 = 0;
    while ($row1 = $this->db->sql_fetchrow($result1))
    {
       	if ($this->auth->acl_get('f_read', $row1['forum_id']) == 1) 
        {
            if ($n1 < $list_view)
			{
				if (strlen($row1['topic_title']) > 28)
				{
				$topic_title1 = substr($row1['topic_title'],0,27) . "...";
				}else{
				$topic_title1 = $row1['topic_title'];
				}
			$last_topic_link[$n1]   		= append_sid("{$this->root_path}viewtopic.{$this->phpEx}", "f=" . $row1['forum_id'] . "&amp;t=" . $row1['topic_id']);
            $last_topic_title[$n1]  		= $row1['topic_title'];
			$last_topic_title_short[$n1]  	= $topic_title1;
			$last_topic_forum[$n1]  		= $row1['forum_name'];
            $last_topic_author[$n1] 		= $row1['topic_first_poster_name'];
           // $last_topic_data[$n1]   		= $this->user->format_date($row1['topic_time'], "|d M|");
 $last_topic_data[$n1]   		= date("d/m",$row1['topic_time']); 
			++$n1 ;          	
            }else{
			break ;
			}
            
        }
    }
//---------- 10 Topics più Recenti end -----------//

//---------- 10 Topics più Visti start -----------//

// modifica Mod: inserisce la selezione del periodo di valutazione
$data_cor = time() ; // timestamp data corrente
$data_6 = ($data_cor - 15811200) ;  // timestamp di 182 giorni fa
$data_12 = ($data_cor - 31536000) ; // timestamp di 365 giorni fa
$data_3 = ($data_cor - 7905600) ;
$data_1 = ($data_cor - 2635200) ;

//$data_views = $_POST['sel_views'] ; // opzione selezionata
$data_views = request_var('sel_views', 0);

//evitare bug
$data_ini = '0' ;

//predefinito da pca
$data_predefinita=$this->config['toptentopics_data'];
if($data_views == '')
{
$this->template->assign_var('TIME_SELECTED', '$data_predefinita');
$data_views=$data_predefinita;
}


// assegnazione dell'opzione scelta, per default è Tutto
if ($data_views == '3')
{
$this->template->assign_var('TIME_SELECTED', '3');
$data_ini = '0' ;
}
if ($data_views == '1' )
{
$this->template->assign_var('TIME_SELECTED', '1');
$data_ini = $data_6 ;
}
if ($data_views == '2')
{
$this->template->assign_var('TIME_SELECTED', '2');
$data_ini = $data_12 ;
}
if ($data_views == '4')
{
$this->template->assign_var('TIME_SELECTED', '4');
$data_ini = $data_3 ;
}
if ($data_views == '5')
{
$this->template->assign_var('TIME_SELECTED', '5');
$data_ini = $data_1 ;
}
// fine modifica Modifica periodo di valutazione

$sql2 = "SELECT tt.topic_id, tt.forum_id, tt.topic_title, tt.topic_first_poster_name, tt.topic_views,
    ft.forum_id, ft.forum_name 
    FROM " . TOPICS_TABLE . " tt, " . FORUMS_TABLE . " ft
    WHERE tt.forum_id = ft.forum_id
    AND tt.topic_time > $data_ini
    AND tt.topic_moved_id = 0
    ORDER BY tt.topic_views DESC LIMIT 0,$list_rec";
$result2 = $this->db->sql_query($sql2);
    $n2 = 0 ;
    while ($row2 = $this->db->sql_fetchrow($result2))
    {
		if ($this->auth->acl_get('f_read', $row2['forum_id']) == 1)
		{
			if ($n2 < $list_view)
			{
				if (strlen($row2['topic_title']) > 28)
				{
				$topic_title2 = substr($row2['topic_title'],0,27) . "...";
				}else{
				$topic_title2 = $row2['topic_title'];
				}
			$view_topic_link[$n2]   		= append_sid("{$this->root_path}viewtopic.{$this->phpEx}", "f=" . $row2['forum_id'] . "&amp;t=" . $row2['topic_id']);
			$view_topic_title[$n2]			= $row2['topic_title'];
			$view_topic_title_short[$n2]  	= $topic_title2;	
			$view_topic_forum[$n2]  		= $row2['forum_name'];		
			$view_topic_author[$n2] 		= $row2['topic_first_poster_name'];
			$view_topic_views[$n2]  		= $row2['topic_views'];
			++$n2 ;
			}else{
			break ;
			}
		}
	}
//---------- 10 Topics più visti end -----------//

//---------- 10 Ultimi posts start -----------//
$sql4 = "SELECT tt.topic_id, tt.forum_id, tt.topic_moved_id, tt.topic_last_post_id, tt.topic_last_poster_id, tt.topic_last_poster_name, tt.topic_last_post_subject, tt.topic_last_post_time,
    ft.forum_id, ft.forum_name
    FROM " . TOPICS_TABLE . " tt, " . FORUMS_TABLE . " ft 
    WHERE tt.topic_type = 0
    AND tt.topic_moved_id = 0
    AND tt.forum_id = ft.forum_id
    AND tt.topic_visibility=1
    ORDER BY tt.topic_last_post_time DESC LIMIT 0,$list_rec";
$result4 = $this->db->sql_query($sql4);
    $n4 = 0;
    while ($row4 = $this->db->sql_fetchrow($result4))
    {
       	if ($this->auth->acl_get('f_read', $row4['forum_id']) == 1) 
        {
            if ($n4 < $list_view)
			{
				$post_subject = str_replace("Re: ", "", $row4['topic_last_post_subject']) ;
				if (strlen($post_subject) > 28)
				{
				$post_title = substr($post_subject,0,25) . "...";
				}else{
				$post_title = $post_subject ;
				}
			$last_post_link[$n4]		= append_sid("{$this->root_path}viewtopic.$this->phpEx", "f=" . $row4['forum_id'] . "&amp;t=" . $row4['topic_id'] . "#p" . $row4['topic_last_post_id']);
			//$last_post_link[$n4]   		= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $row4['forum_id'] . "&amp;t=" . $row4['topic_id'] . "p#" . $row4['topic_last_post_id']);
			$last_post_title[$n4] 		= $row4['topic_last_post_subject'];
			$last_post_title_short[$n4] = $post_title;
			$last_post_forum[$n4]  		= $row4['forum_name'];
			$last_post_author[$n4] 		= $row4['topic_last_poster_name'];
			++$n4 ;          	
			}else{
			break ;
			}
        }
    }
//---------- 10 Ultimi posts end -----------//

//posizione top ten topic
$config_position=$this->config['toptentopics_position'];
$config_guest=$this->config['toptentopics_guest'];
$this->template->assign_var('POSITION', $config_position);
$this->template->assign_var('TTT_GUEST', $config_guest);

// Crea l'array "topten_list" che contiene le Variabili per il Template
for ($x = 0; $x < $list_view; ++$x)
{
 $this->template->assign_block_vars('topten_list',array(
	'LAST_TOPIC_LINK'			=> $last_topic_link[$x],
	'LAST_TOPIC_TITLE'			=> $last_topic_title[$x],
	'LAST_TOPIC_TITLE_SHORT'	=> $last_topic_title_short[$x],
	'LAST_TOPIC_FORUM'			=> $last_topic_forum[$x],
	'LAST_TOPIC_AUTHOR'			=> $last_topic_author[$x],
	'LAST_TOPIC_DATA'			=> $last_topic_data[$x],

	'VIEW_TOPIC_LINK'			=> $view_topic_link[$x],
	'VIEW_TOPIC_TITLE'			=> $view_topic_title[$x],
	'VIEW_TOPIC_TITLE_SHORT'	=> $view_topic_title_short[$x],
	'VIEW_TOPIC_FORUM'			=> $view_topic_forum[$x],
	'VIEW_TOPIC_AUTHOR'			=> $view_topic_author[$x],
	'VIEW_TOPIC_VIEWS'			=> $view_topic_views[$x],

	'LAST_POST_LINK'			=> $last_post_link[$x],
	'LAST_POST_TITLE'			=> $last_post_title[$x],
	'LAST_POST_TITLE_SHORT'		=> $last_post_title_short[$x],
	'LAST_POST_FORUM'			=> $last_post_forum[$x],
	'LAST_POST_AUTHOR'			=> $last_post_author[$x]
	));
}
//codice end 
}
}
