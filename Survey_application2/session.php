<?php
include("db.php");

session_start();
ob_start();
if(isset($_COOKIE['loginkullaniciadi'])){
		$_SESSION["kullanici"] = true;
		$_SESSION["loginkullaniciadi"] = $_COOKIE['loginkullaniciadi'];
		$_SESSION["loginsifre"] = $_COOKIE['loginsifre'];
}else{
if(isset($_POST['loginkullaniciadi'])){
	$kullanici_adi = $_POST["loginkullaniciadi"];
	$sifre = $_POST["loginsifre"];
	echo "</br> Hoşgeldiniz sayın".$kullanici_adi;
	$sorgu_giris = mysqli_query($connect,"SELECT * FROM users WHERE kullaniciadi = '$kullanici_adi' AND sifre = '$sifre' ");
	echo "</br> Veritabanı sorgusu yapıldı.";
	if(mysqli_num_rows($sorgu_giris) == 1){
		$_SESSION["kullanici"] = true;
		$_SESSION["loginkullaniciadi"] = $kullanici_adi;
		$_SESSION["loginsifre"] = $sifre;
		if(isset($_POST['benihatirla'])){
			setcookie("loginkullaniciadi", $_POST['loginkullaniciadi'], time()+60*60*24*30);
			setcookie("loginsifre", $_POST['loginsifre'], time()+60*60*24*30);
		}
		echo "Giriş başarılı. </br> Anket sayfasına yönlendiriliyorsunuz... ";
		header("Refresh: 5; url=anketekle.php");
	}
	else{
	echo "Kullanıcı adı veya şifre hatalı.";
	echo "</br> Giriş sayfasına yönlendiriliyorsunuz...";
	header("Refresh:3; url=index.php");
	}
}
}
ob_end_flush();
?>