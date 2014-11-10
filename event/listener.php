<?php
namespace phpbbitalia\toptentopics\event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class listener implements
EventSubscriberInterface{
protected $db;
protected $table_prefix;
protected $request;
protected $search_engines;
protected $template;
protected $auth;
protected $user;

public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\template\template $template, \phpbb\auth\auth $auth, \phpbb\user $user, $root_path, $phpEx) {
	$this->db = $db;
	$this->template = $template; 
	$this->auth = $auth;
	$this->user = $user;
    $this->phpEx = $phpEx;

}

static public function getSubscribedEvents()	{		return array(			'core.user_setup'						=> 'setup',					);	}	
public function setup($event)	{		
//codice start
 // MOD Topten Topics : Topics più recenti, Topics più visti e Posts più recenti 
// created by Micogian (Bingo)
//estensione by Brunino
// configurazione: numero dei recods da visualizzare nella Lista
$list_rec = 20 ;   // numero di records da estrarre dalla tabella (alcuni topics potrebbero non aver il permesso di lettura)
$list_view = 10 ;  // sostituire il numero della variabile $lista se si desidera diminuire/aumentare il numero dei Topics 

//---------- 10 Topics più Recenti start -----------//
$sql1 = "SELECT tt.topic_id, tt.forum_id, tt.topic_title, tt.topic_time, tt.topic_moved_id, tt.topic_first_poster_name,
    ft.forum_id, ft.forum_name
    FROM " . TOPICS_TABLE . " tt, " . FORUMS_TABLE . " ft 
    WHERE tt.topic_type = 0
    AND tt.topic_moved_id = 0
    AND tt.forum_id = ft.forum_id
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
			$last_topic_link[$n1]   		= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $row1['forum_id'] . "&amp;t=" . $row1['topic_id']);
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

$sql2 = "SELECT tt.topic_id, tt.forum_id, tt.topic_title, tt.topic_first_poster_name, tt.topic_views,
    ft.forum_id, ft.forum_name 
    FROM " . TOPICS_TABLE . " tt, " . FORUMS_TABLE . " ft
    WHERE tt.forum_id = ft.forum_id
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
			$view_topic_link[$n2]   		= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $row2['forum_id'] . "&amp;t=" . $row2['topic_id']);
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
			$last_post_link[$n4]		= append_sid("{$phpbb_root_path}viewtopic.$phpEx", "f=" . $row4['forum_id'] . "&amp;t=" . $row4['topic_id'] . "#p" . $row4['topic_last_post_id']);
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
