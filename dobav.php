<!DOCTYPE HTML>
<HTML>
<HEAD>
  <link rel="stylesheet" type="text/css" href="dob.css">
  <meta charset="windows-1252" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <script language="JavaScript" type="text/javascript" src="dob.js"></script>
<TITLE>iBlog</TITLE>
</HEAD>
<body>
   <div id="top">
	<table cellspacing=0; cellpadding=0; id=top_links>
	 <tr>
	  <td class=td_top>
	   <div class=top_ya>
	    <a class="top_top" href="index.php">iBlog</a>
		 <td class=td_top1></td>
	   <td class=probel></td>
	   <td class=td_top_right><a class=top_a_right>
<?php
	require_once("connection.php");
?>	    
	   <?

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{ 

$query = mysql_query("SELECT uhash, uid FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata = mysql_fetch_array($query);
if(($userdata['uhash'] == $_COOKIE['hash']) or ($userdata['UID'] == $_COOKIE['id']))
{
$query1 = mysql_query("SELECT u1name,u2name FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata1 = mysql_fetch_array($query1);


echo "<div class='mid_right_mid'>".$userdata1['u1name']." ".$userdata1['u2name']."</div>";
//echo "<td id=\"choosecabinet\">".$userdata1['ulogin']."</td>";

} else {}
}

?>
 </a>
	    </td>
	   </div>
	 </tr>
	</table>
   </div>
   <div class='center'>
	  <div id='mid'>  
	  <div class='dob_mid'>
	  <form id='myform5' method="post" action="otpr_post.php">
	  <table cellspacing=0; cellpadding=0;>
	  <tr>
	  <td>
		<div class='name'>Введите название поста<div></td></tr>
		<tr>
	  <td>
<textarea name=comment1 class=comment1 id='commentar'></textarea></td></tr>
<tr>
	  <td>
       <div class='name'>Наберите текст поста<div></td></tr>
	   <tr>
	  <td>
	
<textarea name=comment2 class=comment2 id='commentar1'></textarea></td></tr>
<input type='hidden' id='ot' value='$iid'>
<tr>
	  <td>
<input type='submit' name='but'  id='bt_vh' class='qwe' value=Добавить ></td></tr>


		   
		</table>   
		   
		
		</form>
	  
	  </div>
        
		
		
		
        </div>
    </div>
          <script language="JavaScript" type="text/javascript" src="otpravit.js"></script>
  </body>
</HTML>