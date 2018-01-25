<?php
// MySQL Bağlantısını Yapalım
$vt = new mysqli('localhost', 'root', '','kahve_db');
 
// MySQL Bağlantısını Yapalım
$vt->select_db('kahve_db');
$vt->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.
?>
