<?php
//Siteye kahve eklemek için gerekli kodları yazıyoruz.
if ( (isset($_POST["kahveadi"])) && (isset($_POST["aciklama"])) && (isset($_POST["resim"])) ) 
{
	$kahveadi = $_POST['kahveadi'];
	$aciklamasi = $_POST['aciklama'];
	$resim = $_POST['resim'];

    $baglan=mysqli_connect("localhost","root","","kahve_db"); 
    mysqli_set_charset($baglan, "utf8");

    $sqlekle="INSERT INTO kahveler( kahve_adi, kahve_aciklamasi, kahve_resim) VALUES ('$kahveadi','$aciklamasi','$resim')";

    $sonuc=mysqli_query($baglan,$sqlekle);

    if ($sonuc==0)//Hata oluşuyor mu diye sorguluyoruz.
    echo "Eklenemedi, kontrol ediniz";
    else
    echo "Başarıyla eklendi";
}
else
{  
    echo "";
}

?>
<form action="" method="post">
        <table cellspacing="5" cellpadding="5">
            <tr>
                <td>Kahve Adı</td>
                <td><input type="text" name="kahveadi"/></td>
            </tr>
            <tr>
                <td>Resim URL</td>
                <td><input type="text" name="resim"/></td>
            </tr>
            <tr>
                <td>Açıklama</td>
                <td><textarea name="aciklama" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kayıt Ekle" /></td>
            </tr>
        </table>
</form>