<?php
//Admin Panelinden giriş aşamaları
$user = "admin";//kullanıcı adı belirleme
$pass = "9604";//şifre belirleme
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass))
{
	$_SESSION["login"] = "true";
	$_SESSION["user"] = $user;
	$_SESSION["pass"] = $pass;
	header("Location:admin.php");
}
else
{
echo "<center><b><font size='6'><br><br><br>Kullancı Adı veya Şifre Yanlış.<br><br></font></b></center><br>";
echo "<center><b><font size='6'>Giriş Sayfasına Yönlendiriliyorsunuz.</font></b></center>";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>