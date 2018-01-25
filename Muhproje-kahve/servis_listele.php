<?php

header('Content-Type: text/html; charset=utf-8'); 
 
//Veritabanımıza bağlanıyoruz..
mysql_connect("localhost","root","")or die("baglanamadim");
mysql_query('SET NAMES utf8');
mysql_query('SET CHARACTER_SET utf8');
mysql_select_db("kahve_db");
 
//Veritabanındaki datamızı mysql ile cekiyoruz.
//listeleme işlemlerini yapıyoruz
$result=mysql_query("select * from kahveler ");
while($row=mysql_fetch_array($result)) {
	$outputArr = array();
	$outputArr['veriler'] = $row;
print_r(json_encode($outputArr));
}

mysql_close();  
?> 