<?php
session_start();
session_destroy();
setcookie("loginkullaniciadi", "", time()-3600);
setcookie("loginsifre", "", time()-3600);
echo "Çıkış yapıldı. Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh:3; url=index.php");
?>