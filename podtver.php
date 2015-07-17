<?php  
 require_once("connection.php");
 
 $iid=$_GET["id"];
  
 $pod=$_POST['podtv'];
 $query=mysql_query("SELECT cod  from iuser where uid=$iid", $link);
            $row=mysql_fetch_array($query);
 $r=$row['cod'];			
 if($pod == $r){
mysql_query("UPDATE IUSER SET flag=0 where uid=$iid");	  
 }
 else{
	 
	 
 }
?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="vhod.html");}
window.setTimeout("changeurl();",100);
</script>