<?php
include("session.php");
$csay=1;
$ssay=1;
if(!isset($_SESSION['loginkullaniciadi'])){
	echo  "Bu sayfayı görme yetkiniz yok. Giriş sayfasına yönlendiriliyorsunuz...";
	header("Refresh:3; url=index.php");
}

else{
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Anketci </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.sonuctablosu td{
		padding-left:50px;
		}

	</style>
</head>
<body>

<h1 style="float:left; margin-right:20%; margin-top:30px;"><b>Anketci</b></h1>
<div style="float:left; margin-top:30px;">
<form method="POST" action=""> <!-- method="POST" unutma sakın yoksa çalışmaz. action a da bak -->
<textarea name="anketsorusu" rows="4px" cols="80px" placeholder="Lütfen bir anket oluşturun...">
</textarea>
</div>
<div style="float:left;">


<table>
<tr><td><input type="text" name="secenek1" placeholder="1.Seçenek"></td></tr>
<tr><td><input type="text" name="secenek2" placeholder="2.Seçenek"></td></tr>
<tr>
<td><input type="text" name="secenek3" placeholder="3.Seçenek"></td>
<td><input type="submit" name="button_anketolustur" value="Anket Oluştur"></td>
<td><a href="./cikis.php">Çıkış Yap</a></td>
</tr>
<tr><td><input type="text" name="secenek4" placeholder="4.Seçenek"></td></tr>
<tr><td><input type="text" name="secenek5" placeholder="5.Seçenek"></td></tr>
</table>
</form>
<?php
if(@$_POST["button_anketolustur"]){
	$kullanici_adi = $_SESSION["loginkullaniciadi"];
	$tarih = Date('d.m.Y H:i:s',time());
	$anket_sorusu = $_POST["anketsorusu"];
	$secenek1 = $_POST["secenek1"];
	$secenek2 = $_POST["secenek2"];
	$secenek3 = $_POST["secenek3"];
	$secenek4 = $_POST["secenek4"];
	$secenek5 = $_POST["secenek5"];
	if($kullanici_adi and $anket_sorusu and $tarih and $secenek1 and $secenek2 and $secenek3 and $secenek4 and $secenek5)
	{
		$sorgu_anketekle = mysqli_query($connect,"INSERT INTO anketler(kullaniciadi,tarih,anket_sorusu,s1,s2,s3,s4,s5) VALUES('$kullanici_adi','$tarih','$anket_sorusu','$secenek1','$secenek2','$secenek3','$secenek4','$secenek5') ");
		if($sorgu_anketekle)
			echo "Anketiniz kaydedildi.";
	}
	else{
		echo "Anket kaydı başarısız. Doldurmadığınız yerler var";
	}
}
?>
</div>
</br></br></br></br></br></</br></br></br></br></br></br>
<hr style="margin:0px;"><h1 style="margin:0px;"><p align="center" style="margin:0px;"><b>ANKETLER</b></p></h1><hr>

<div style="float:left;">
<form method="POST" action="">
<table class="oytablosu">
<tr>
<td>bilal</td>
<td>18.06.2018 14:55:48</td>
</tr>
<tr>
<td>Türkiyenin en iyi üniversitesi?</td>
<td><input type="radio" name="cevap" value="ktu" >KTU</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cevap" value="itu" >İTÜ</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cevap" value="odtu" >ODTÜ</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cevap" value="ytu" >YTÜ</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="cevap" value="odu" >ODÜ</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="button_oyla" value="OYLA" ></td>
</tr>
</table>
</form>
</div>
<div style="float:left; margin-left:10%; margin-top:1%;">
<table class="sonuctablosu">
<tr>
<td>Toplam oy sayısı:0</td>
<td>KTÜ:</td>
</tr>
<tr>
<td></td>
<td>İTÜ:</td>
</tr>
<tr>
<td></td>
<td>ODTÜ:</td>
</tr>
<tr>
<td></td>
<td>YTÜ:</td>
</tr>
<tr>
<td></td>
<td>ODÜ:</td>
</tr>
</table>		
</div>
</br></br></br></br></br></br></br></br></br></br>
<hr></br><hr>
<div style="float:left;">
<form method="POST" action="">
<table class="oytablosu">
<tr>
<td>celal</td>
<td>18.06.2018 00:12:48</td>
</tr>
<tr>
<td>Hangi yılda doğdunuz?</td>
<td><input type="radio" name="secenek" value="ktu" >1996</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="itu" >1997</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="odtu" >1998</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="ytu" >1999</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="odu" >2000</td>
</tr>
</table>
</form>
</div>
<div style="float:left; margin-left:10%; margin-top:1%;">
<table class="sonuctablosu">
<tr>
<td>Toplam oy sayısı:5</td>
<td>1996:halit</td>
</tr>
<tr>
<td></td>
<td>1997:gonul</td>
</tr>
<tr>
<td></td>
<td>1998:</td>
</tr>
<tr>
<td></td>
<td>1999:</td>
</tr>
<tr>
<td></td>
<td>2000:celal-selda-yirmak</td>
</tr>
</table>		
</div>
</br></br></br></br></br></br></br></br></br></br>
<hr></br><hr>
<div style="float:left;">
<form method="POST" action="">
<table class="oytablosu">
<tr>
<td>yirmak</td>
<td>18.06.2018 15:16:48</td>
</tr>
<tr>
<td>Hangi ayda doğdunuz?</td>
<td><input type="radio" name="secenek" value="ktu" >Haziran</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="itu" >Temmuz</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="odtu" >Ağustos</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="ytu" >Eylül</td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="odu" >Ekim</td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="button_oyla" value="OYLA">
</td>
</tr>
</table>
</form>
</div>

<div style="float:left; margin-left:10%; margin-top:1%;">
<table class="sonuctablosu">
<tr>
<td>Toplam oy sayısı:3</td>
<td>Haziran:</td>
</tr>
<tr>
<td></td>
<td>Temmuz:celal</td>
</tr>
<tr>
<td></td>
<td>Ağustos:selda</td>
</tr>
<tr>
<td></td>
<td>Eylül:gonul</td>
</tr>
<tr>
<td></td>
<td>Ekim:</td>
</tr>
</table>		
</div>
</br></br></br></br></br></br></br></br></br></br>
<hr>
<?php
$sorgu_anketsirala = mysqli_query($connect,"SeLECT * FROM anketler ORDER BY id DESC ");
while($eklenen_anketler = mysqli_fetch_array($sorgu_anketsirala)){
	
//veritabanındaki secenek değerlerini değişkenlere aldık php de kullanabilmek için
$s1=$eklenen_anketler["s1"];
$s2=$eklenen_anketler["s2"];
$s3=$eklenen_anketler["s3"];
$s4=$eklenen_anketler["s4"];
$s5=$eklenen_anketler["s5"];

?>
<div style="float:left;">
<form method="POST" action="">
<table class="oytablosu">
<!--hidden'da id tutuyoruz. hangi anket olduğunu anlamak için -->
<input type="hidden" name="hidden" value="<?php echo $eklenen_anketler["id"]?>">

<!-- burada anketin sol tarafını hallettik. veritabanındaki değerleri sayfaya yazdırdık-->
<tr>
<td><?php echo $eklenen_anketler["kullaniciadi"] ?></td>
<td><?php echo $eklenen_anketler["tarih"]?></td>
</tr>
<tr>
<td><?php echo $eklenen_anketler["anket_sorusu"]?></td>
<td><input type="radio" name="secenek" value="<?php echo $eklenen_anketler["s1"]?>" ><?php echo $eklenen_anketler["s1"]?></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="<?php echo $eklenen_anketler["s2"]?>" ><?php echo $eklenen_anketler["s2"]?></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="<?php echo $eklenen_anketler["s3"]?>" ><?php echo $eklenen_anketler["s3"]?></td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="<?php echo $eklenen_anketler["s4"]?>"> <?php echo $eklenen_anketler["s4"]?> </td>
</tr>
<tr>
<td></td>
<td><input type="radio" name="secenek" value="<?php echo $eklenen_anketler["s5"]?>" ><?php echo $eklenen_anketler["s5"]?></td>
</tr>
<tr>
<td></td>
<td>
<?php
// kullanıcı bir kere oy verdiğinde bidaha oy verememsi için butonun kaybolması içindi ama yarım kaldı çalışmıyor.
$kontrol = mysqli_query($connect,"select * from oy_kullananlar where kul_id=".isset($_SESSION['id'])." and anket_id=".$eklenen_anketler["id"]." ");

?>
<input type="submit" name="button_oyla" value="OYLA">
</td>
</tr>
</table>
</form>


<?php
//Burasıda toplam oy sayısı ve oy arttırma için 
$sc1 = $eklenen_anketler["sc1"];
$sc2 = $eklenen_anketler["sc2"];
$sc3 = $eklenen_anketler["sc3"];
$sc4 = $eklenen_anketler["sc4"];
$sc5 = $eklenen_anketler["sc5"];

$toplam_oy = $sc1+$sc2+$sc3+$sc4+$sc5;

//burada da oyla butonuna tıklandığında 
//hangi secenek secilmiş ise gerekli kontrolleri yaparak veritabanındaki değeri 1 arttırıyoruz
if (isset($_POST["button_oyla"])){
	
	if($s1==@$_POST["secenek"]){
		//sql sorgusundaki WHERE kısmı hangi anketin oyunu arttıracağımızı bilebilmemiz için id kontrolü yaptık.
		$tamam = mysqli_query($connect,"UPDATE anketler SET sc1=sc1+1 WHERE id='".$eklenen_anketler["id"]."'");
		}
		elseif($s2==@$_POST["secenek"]){
			$tamam = mysqli_query($connect,"UPDATE anketler SET sc2=sc2+1 WHERE id='".$eklenen_anketler["id"]."'");
		}
		elseif($s3==@$_POST["secenek"]){
			$tamam = mysqli_query($connect,"UPDATE anketler SET sc3=sc3+1 WHERE id='".$eklenen_anketler["id"]."'");
		}
		elseif($s4==@$_POST["secenek"]){
			$tamam = mysqli_query($connect,"UPDATE anketler SET sc4=sc4+1 WHERE id='".$eklenen_anketler["id"]."'");
		}
		elseif($s5==@$_POST["secenek"]){
			$tamam = mysqli_query($connect,"UPDATE anketler SET sc5=sc5+1 WHERE id='".$eklenen_anketler["id"]."'");
		}	
}		


?>
</div>
<div style="float:left; margin-left:10%; margin-top:1%;">
<table class="sonuctablosu">
<tr>
<!--Toplam oy sayısını burada listelettik -->
<td>Toplam oy sayısı: <?php echo $toplam_oy; ?></td>
<td>Haziran:</td>
</tr>
<tr>
<td></td>
<td>Temmuz:celal</td>
</tr>
<tr>
<td></td>
<td>Ağustos:selda</td>
</tr>
<tr>
<td></td>
<td>Eylül:gonul</td>
</tr>
<tr>
<td></td>
<td>Ekim:</td>
</tr>
</table>		
</div>
</br></br></br></br></br></br></br></br></br></br>
<hr>
<?php 
	}
?>
</body>
</html>
<?php
}
 ?>
