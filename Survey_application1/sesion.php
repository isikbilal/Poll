<?php
	include("db.php");
	session_start();
	ob_start();
	$kullanici=$_POST['kullanici_adi'];
	$sifre=$_POST['sifre'];
	$sorgu=mysqli_query("mysqli*from kullanicilar");
	while($row=mysqli_fetch_array($sorgu))
	{
		if($kullanici==$row['kullanici_adi'] and $sifre==$row['sifre'])
		{
			$_SESSION['giris']="true";
			$_SESSION['user']=$row['kullanici_adi'];
			$_SESSION['pass']=$row['sifre'];
			echo "Giriş Başarılı.Admin Paneline Yönlendiriliyorsunuz... ";
			header("Location:admin.php");
		}
		else
		{
			echo "Giriş Başarısız.Sorgu Sayfasına Yönlendirliyorsunuz...";
			header("Refresh: 3;url=sorgu_sayfasi.php");
		}
	}
	ob_end_flush();
?>