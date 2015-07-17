<?php
require_once("connection.php");

$id = $_POST['iid'];
$comment = $_POST['comment'];
if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{ 

$query = mysql_query("SELECT uhash, uid ,u1name,u2name FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata = mysql_fetch_array($query);
$u1name=$userdata['u1name'];
$u2name=$userdata['u2name'];
if(($userdata['uhash'] == $_COOKIE['hash']) or ($userdata['UID'] == $_COOKIE['id']))
{
	$query1 = mysql_query("SELECT u1name,u2name FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata1 = mysql_fetch_array($query1);
	
	
	
    $sms1=mysql_query("insert into coment (id_post,id_u,coments,u1name,u2name) values ('$id','".intval($_COOKIE['id'])."','$comment','$u1name','$u2name')");
} else {}
}
	
			  
			 


?>
<!--<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="../im/im.php");}
window.setTimeout("changeurl();",100);
</script>