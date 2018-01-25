<?php
//baglan.php dosyamızı yani bağlantımızı aktif etmemiz gerek, bu yüzden baglan.php dosyasını çağırıyoruz.
require_once "baglan.php";
$sorgu = $vt->query('select * from kahveler');      
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kahve Listeleri</title>
<link rel="stylesheet" href="stil.css" />
</head>
<body>
<div class="hepsi">
	<div class="menu">		
		<ul>
		<li id="logo"><img src="resim/logo.jpg"></li>
		<li id="anasayfa"><a href="index.php"><font face="tahoma" color="#DEB887"><b>Anasayfa</b></font></a></li>
		<li id="kahveler"><a href="kahveler.php"><font face="tahoma" color="#DEB887"><b>Kahveler</b></font></a></li>
        <li id="kahve"><a href="admin/index.php"><font face="tahoma" color="#DEB887"><b>Admin Paneli</b></font></a></li>
        <li id="tr"><img src="resim/sablon.jpg" width="1275" height="400" /></li> 
		</ul>
	</div>
</div>

<?php
// Siteye kayıtlı tüm kahve çeşitlerini veri tabanından çekiyoruz.
$sorgu = $vt->query('select * from kahveler');
// sonuçları ekrana yazdiriyoruz
while($sonuc = $sorgu->fetch_assoc()) {
echo "<center>";
	echo "<div>";
            echo "<br>";
            echo "<font size='5' face='tahoma' color='#74403a'><h2>".$sonuc['kahve_adi']."</h2><br></font>";
            echo "<font size='4' face='tahoma' ><p>".$sonuc['kahve_aciklamasi']."<p><br></font>";
            echo "<img src='resim/".$sonuc['kahve_resim']."' height='175' width='175'>";
            echo "<div>";
            	echo "<div class='''";

            	echo "</div>";
            echo "</div>";
    echo "</div>";
 echo "</center>";
}
    
?>   


	<div class="alt">
		<div class="alt1">
			<div class="hakkimizda">
			</div>
		<div class="alt2">
			<div class="alt2hizala">
				<ul>
				<li><a href=""><img src="resim/face.jpg" width="50" height="50"/></a></li>
				<li><a href=""><img src="resim/instagram.jpg" width="50" height="50"/></a></li>
				<li><a href=""><img src="resim/twitter.jpg" width="50" height="50"/></a></li>
				</ul>
			</div>
		</div>
		</div>
	</div>
</div>
</body>
</html>
