<?php
require_once("connection.php");

 $name = $_POST['comment1'];
	     $posttext=$_POST['comment2'];


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{ 

$query = mysql_query("SELECT uhash, uid FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata = mysql_fetch_array($query);
if(($userdata['uhash'] == $_COOKIE['hash']) or ($userdata['UID'] == $_COOKIE['id']))
{      
   
		
		$sms1=mysql_query("insert into post (id_u,name_post,text_post,photo,photo2,tizer2) values ('".intval($_COOKIE['id'])."','$name','$posttext','1433267231.png','right','right1')");
		

} else {}
}

	
			  
			 


?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="index.php");}
window.setTimeout("changeurl();",100);
</script>