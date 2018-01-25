<?php

header('Content-Type: text/html; charset=utf-8'); 
//Veritabanımıza bağlanıyoruz..
mysql_connect("localhost","root","")or die("baglanamadim"); 
mysql_query('SET NAMES utf8');
mysql_query('SET CHARACTER_SET utf8');
mysql_select_db("kahve_db");

//RESTful Web servisinde varolan dataları çekiyoruz..
$json = file_get_contents('php://input');
$obj = json_decode($json);

//key değerlerini kullanarak , çektiğimiz değerleri veritabanında update ediyoruz.
$sqlInser = "UPDATE kahveler SET kahve_adi = '".$obj->{'kahve_adi'}."', kahve_aciklamasi = '".$obj->{'kahve_aciklamasi'}."', kahve_resim = '".$obj->{'kahve_resim'}."' WHERE kahve_id =".$obj->{'kahve_id'};
 
mysql_query($sqlInser);
mysql_close();

?>