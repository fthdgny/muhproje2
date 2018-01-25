<?php 
//Listeden veri silme işlemleri
if ($_GET) 
{
include("baglan.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
	if ($baglanti->query("DELETE FROM kahveler WHERE kahve_id =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
	{
	header("location:admin.php"); // Eğer sorgu çalışırsa admin.php sayfasına gönderiyoruz.
	}
}

?>