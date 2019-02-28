<?php
include("session.php");
if(!isset($_SESSION['loginkullaniciadi'])){
?>
<html>
<head>
<meta charset="utf-8">
<title>Giriş </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1><b>Anketci</b></h1>
<form method="POST" action="session.php">
<table>
<tr>
<td>Kullacıcı Adı:</td>
<td>Şifre:</td>
</tr>
<tr>
<td>
<input type="text" name="loginkullaniciadi" placeholder="Lütfen kullanıcı adınızı girin.">
</td>
<td>
<input type="password" name="loginsifre">
</td>
<td>
<input type="submit" name="giris" value="Yolla">
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="benihatirla" value="hatirla">Beni Hatırla
</td>
</tr>
</table>
</form>


</body>
</html>
<?php
}else{
	echo "Zaten giriş yapmışsınız. Anket sayfasına yönlendriliyorsunuz...";
	header("Refresh:3; url=anketekle.php");
}
?>