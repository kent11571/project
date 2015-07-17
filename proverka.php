<!DOCTYP html>
<?php
 $iid=$_GET["id"];
echo "
<HTML>
<HEAD>
  <link rel='stylesheet' type='text/css' href='vhod.css'>
  <meta charset='UTF-8' name='viewport' >
<TITLE>Подтверждение Регистрации</TITLE>
</HEAD>
<body bgcolor='white'>

<div class=regi>iBlog</div>
<div class=reg id='reg2'><div class=reg_vhod >Подтверждение Регистрации</div>
 <div class='inp_vhod'>
 <form id='myform3' method='post' action='podtver.php?id=$iid'>
  <table class='tbl_vh'>
   <div class='input'>
   <tr>
   
    <td class='td_reg1' colspan='3'>
     <input type='text' name='podtv'  id='podtv' class='qwe' placeholder='Введите проверочный код' autofocus required pattern='^\d{6}' title='Заполните поле в формате:123456'>
    </td>
  </tr>
   <td class='cl1'><input type='submit' name='but1'  id='bt_vh1' class='qwe' value=Подтвердить>
   </td>
  </tr>
  </div>
 </table>
</div>
</div>
</form>
</body>
</html>";
?>