<?php
   
 require_once("connection.php");
?>
<?php

		$firstname=$_POST['1name'];
		$lastname=$_POST['2name'];
		$treename=$_POST['3name'];
		$uemail=$_POST['email'];
		$usex = $_POST['sex1'];
        $uold = $_POST['old'];
		 $utel = $_POST['tel'];
	     $password=$_POST['password'];
	
 

$prov=rand(100000,999999);
$result2 = mysql_query ("INSERT INTO iuser (u1name,u2name,u3name,uemail,usex,utel,uold,upassword,cod,flag) VALUES('$firstname','$lastname','$treename','$uemail','$usex','$utel','$uold','$password','$prov','1')");
if ($result2=='TRUE'){
	
       $query=mysql_query("SELECT uid  from iuser where utel=$utel", $link);
                $row=mysql_fetch_array($query);
	
  echo "Привет! Для подтверждения регистрации пожалуйста перейдите по ссылке ,\n и ввведите проверочный код $prov \n http://blog.ru/proverka.php?id={$row['uid']}";
   $t=$row['uid'];
    //echo "$t";
}
       


else {
echo "Ошибка! Вы не зарегистрированы.";
}


    ?>
	
	
