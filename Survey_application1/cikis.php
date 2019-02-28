<meta charset="UTF-8">
<?php
ob_start();
session_destroy();
echo "Çıkış Başarılı.Yönlendiriliyorsunuz...";
header("Refresh: 3;url=sorgu_sayfasi.php");

?>