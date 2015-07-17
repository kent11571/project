<?php
header("Content-Type: text/html; charset=utf-8");
require_once("connection.php");
?>
<?
if (isset($_POST['tel1'])){ 
$login = $_POST['tel1']; 
if ($login == ''){ 
unset($login);
} 
}
if (isset($_POST['password1'])){ 
$password=$_POST['password1']; 
if ($password ==''){ 
unset($password);
} 
}
function generateCode($length=6) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
$code = "";
$clen = strlen($chars) - 1;
while (strlen($code) < $length) {
$code .= $chars[mt_rand(0,$clen)];
}
return $code;
}
$query = mysql_query("SELECT UID, UPASSWORD FROM IUSER WHERE UTEL='$login'", $link);
$data = mysql_fetch_array($query);

if($data['UPASSWORD'] === $password){
$hash = md5(generateCode(10));
mysql_query("UPDATE IUSER SET UHASH='".$hash."' WHERE UID='".$data['UID']."'");
setcookie("id", $data['UID'], time()+60*60*24*30);
setcookie("hash", $hash, time()+60*60*24*30);

header("Location: index.php"); 
exit();
} else {
print "Вы ввели неверный логин/пароль ";
print "$login";

//print "$data['UPASSWORD']";
}
?>