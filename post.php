<!DOCTYPE HTML>
<HTML>
<HEAD>
  <link rel="stylesheet" type="text/css" href="post.css">
  <meta charset="windows-1252" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  
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
 <?php
	require_once("connection.php");
?>	    
	   <?
		
		    $iid=$_GET["id"];
		      $query=mysql_query("SELECT id_p,name_post,text_post,photo from post where id_p=$iid", $link);
                $row=mysql_fetch_array($query);
		           if($row['id_p'] == $iid)
		         {
			       echo "
				    </td>
	   </div>
	 </tr>
	</table>
   </div>
   <div class='center'>
	  <div id='mid'>  
	      <div class='post_1'>
	       <div class='name_post'>{$row['name_post']}</div>	
	       <div class='post_photo'><img id='image_preview' src={$row['photo']} align='right'></div>{$row['text_post']}</div> 
		   ";}
	               echo "
	      </div>
	     <div class='comentar'>
	      <form action='' method='post'>
           <textarea name=comment class=comment id='comment'></textarea>
           <input type='hidden' id='ot' value='$iid'>
           <button name='but'  id='bt_vh' class='qwe'>отправить</button>
          </form> 
        </div>
         <div class='otz'>";
		 
		if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{ 

$query = mysql_query("SELECT uhash, uid FROM iuser WHERE UID = '".intval($_COOKIE['id'])."'", $link);
$userdata = mysql_fetch_array($query);
if(($userdata['uhash'] == $_COOKIE['hash']) or ($userdata['UID'] == $_COOKIE['id']))
{
$query1=mysql_query("SELECT coments,date,u1name,u2name from coment where id_post=$iid ORDER BY date DESC", $link);
               while($row1=mysql_fetch_array($query1)){
			       echo "
             <div class='otz_com'>
			   <div class='fio'>
			   <div class='name1'>{$row1['u1name']}</div>
			   <div class='name2'>{$row1['u2name']}</div>
			   </div>
               <div class='times'>{$row1['date']}</div>
               <div class='otz_com_ot'>{$row1['coments']}</div>
             </div>";
 
			 }

} else {}
}
		
		
             ?>
        </div>
    </div>
          <script language="JavaScript" type="text/javascript" src="otpravit.js"></script>
  </body>
</HTML>