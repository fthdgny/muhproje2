<?php
//Cıkış yaptıktan sonraki aşamalar
session_start();
ob_start();
session_destroy();
echo "<center><b><font size='5' ><br><br><br>Çıkış Yaptınız. <br><br>Ana Sayfaya Yönlendiriliyorsunuz</font></b></center>";
header("Refresh: 2; url=/kahve/index.php");
ob_end_flush();
?> 