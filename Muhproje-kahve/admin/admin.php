<?php 
include("baglan.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
session_start();
if(!isset($_SESSION["login"])){
echo "<center><b><font size='18' text='italic'>Bu sayfayı görüntüleme yetkiniz yoktur.</font></b></center>";
}
else
{
echo "<b><font size='5'><a href=logout.php>Çıkış Yap</a></font></b>";
echo "<center><b><font size='5' color='#0c7d81'>   Admin Sayfasına Hoşgeldiniz  </font></b></center>";
echo "<br>";


echo "<!doctype html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<title>Veritabanı İşlemleri</title>";
echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' 
integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "<div class='col-md-6'>";
echo "<form action='' method='post'>";
	
	echo "<table class='table'>";
		
		echo "<tr>";
			echo "<td>Kahve Adı</td>";
			echo "<td><input type='text' name='kahve' class='form-control' ></td>";
		echo "</tr>";

		echo "<tr>";
			echo "<td>Açıklama</td>";
			echo "<td><textarea name='aciklama' class='form-control' ></textarea></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Resim</td>";
			echo "<td><input type='text' name='resim' class='form-control' ></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td></td>";
			echo "<td><input class='btn btn-primary'  type='submit' value='Ekle'></td>";
		echo "</tr>";

	echo "</table>";

echo "</form>";

// Öncelikle HTML düzenimizi oluşturuyoruz. 
//Daha sonra girdiğimiz verileri veritabanına eklemesi için PHP kodlarına geçiyoruz. 


if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
	
	$kahve = $_POST['kahve']; // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
	$aciklama = $_POST['aciklama'];
	$resim = $_POST['resim'];
	if ($kahve<>"" && $aciklama<>"" && $resim<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz. başka kontrollerde yapabilirsiniz.
		
		if ($baglanti->query("INSERT INTO kahveler (kahve_adi, kahve_aciklamasi,kahve_resim) 
		VALUES ('$kahve','$aciklama','$resim')")) // Veri ekleme sorgumuzu yazıyoruz.
		{
			echo "<center><font size='23' color='#0000CD'>Veri Eklendi</font></center>"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
		}
		else
		{
			echo "<center><font size='23' color='red'>Hata oluştu</font></center>";
		}
	}
}

echo "</div>";
// Veritabanına eklenmiş verileri sıralamak için önce üst kısmı hazırlayalım.
echo "<div class='col-md-7'>";
echo "<table class='table'>";
	echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Kahve Adı</th>";
		echo "<th>Açıklaması</th>";
		echo "<th>Resim</th>";
		echo "<th></th>";
		echo "<th></th>";
	echo "</tr>";
// Şimdi ise verileri sıralayarak çekmek için PHP kodlamamıza geçiyoruz. 
$sorgu = $baglanti->query("SELECT * FROM kahveler"); // Makale tablosundaki tüm verileri çekiyoruz.

while ($sonuc = $sorgu->fetch_assoc()) { 
$id = $sonuc['kahve_id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
$kahve = $sonuc['kahve_adi'];
$aciklama = $sonuc['kahve_aciklamasi'];
$resim = $sonuc['kahve_resim'];
// While döngüsü ile verileri sıralayacağız.
// Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 
	echo "<tr>";
		echo "<td>"; echo $id; echo "</td>"; 
		echo "<td>"; echo $kahve; echo"</td>";
		echo "<td>"; echo $aciklama; echo"</td>";
		echo "<td>"; echo $resim; echo"</td>";
		echo "<td><a href='duzenle.php?id="; echo $id; echo "' class='btn btn-primary'>Düzenle</a></td>";
		echo "<td><a href='sil.php?id="; echo $id; echo "' class='btn btn-danger'>Sil</a></td>";
	echo "</tr>";
} 
echo "</table>";
echo "</div>";
echo "</div>";
echo "</body>";
echo "</html>";
}
?>