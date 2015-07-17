<!DOCTYPE HTML>
<HTML>
<HEAD>
  <link rel="stylesheet" type="text/css" href="index.css">
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


echo "
<td class=probel>Добавленная запись1111<div class='dpost'><a class='top_top1' href='dobav.php'>Добавить</a></div></td>
	   <td class=td_top_right><a class=top_a_right>
<div class='mid_right_mid'>".$userdata1['u1name']." ".$userdata1['u2name']."</div>";
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
	<div id='mid'>
	  <div class='mid_post'>
	  <?php
	     require_once("connection.php");
			  	$query=mysql_query("SELECT id_p,name_post,text_post,photo from post", $link);
          while($row=mysql_fetch_array($query)){
			  $id_p=$row['id_p'];
			  if($id_p%2==0)
			  {
				  $text='left';
				  $text1='left1';	  
			  }
			  else{
				 $text='right';
				  $text1='right1';  
			  }
			  $kol=$row['text_post'];
			  $kol1=mb_substr($kol, 0, 300,'UTF-8');
			  $query2=mysql_query("SELECT count(1) from coment where id_post=$id_p", $link);
			  $max1=mysql_fetch_array($query2);
			 echo "
	      <div class='post' onclick=location.href='post.php?id={$row['id_p']}'>
	        <div class='tz'><div class='$text1'>
	           <div class='name_post'>{$row['name_post']}</div>
	           <div class='post_1'>$kol1 ...</div>
	           <div class='kol_vo'>
	             <div class='kol_vo1'>Количество комментариев:</div>
	             <div class='kol_vo2'>$max1[0]</div>
	           </div>
	        </div>
	      </div>
	        <div class='$text'><img id='image_preview' src={$row['photo']}></div>
	    </div>  ";} ?>
	</div>
  </body>

</HTML>