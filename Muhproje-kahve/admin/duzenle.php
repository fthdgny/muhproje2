<?php 
include("baglan.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin İşlemleri</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php 
$sorgu = $baglanti->query("SELECT * FROM kahveler WHERE kahve_id =".(int)$_GET['id']); 
//id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor
?>
<div class="container">
<div class="col-md-6">
<form action="" method="post"> 
    <table class="table">   
        <tr>
            <td>Kahve Adı</td>
            <td><input type="text" name="kahve" class="form-control" value="<?php echo $sonuc['kahve_adi']; 
             // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>
        <tr>
            <td>Kahve Açıklaması</td>
            <td><textarea name="aciklama" class="form-control"><?php echo $sonuc['kahve_aciklamasi']; ?></textarea></td>
        </tr>
         <tr>
            <td>Kahve Resmi</td>
            <td><input type="text" name="resim" class="form-control" value="<?php echo $sonuc['kahve_resim']; 
            // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
        </tr>
    </table>
</form>
</div>
<div>
<?php 

if ($_POST) { // Post olup olmadığını kontrol ediyoruz.
    
    $kahve = $_POST['kahve']; // Post edilen değerleri değişkenlere aktarıyoruz
    $aciklama = $_POST['aciklama'];
    $resim = $_POST['resim'];

    if ($kahve<>"" && $aciklama<>""&& $resim<>"") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.
        // Veri güncelleme sorgumuzu yazıyoruz.
        if ($baglanti->query("UPDATE kahveler SET kahve_adi = '$kahve', kahve_aciklamasi = '$aciklama', kahve_resim = '$resim' WHERE kahve_id =".$_GET['id'])) 
        {
            header("location:admin.php"); 
            // Eğer güncelleme sorgusu çalıştıysa ekle.php sayfasına yönlendiriyoruz.
        }
        else
        {
            echo " <font color='red'> !!!  Hata oluştu  !!!</font>"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
}
?>
</body>
</html>