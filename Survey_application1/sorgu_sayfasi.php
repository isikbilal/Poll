<!DOCTYPE html>
<html>
	<head>
		<title>Sorgu Sayfası</title>
		<meta charset="UTF-8">
	</head>
	<body>
	<form action="sesion.php" method="POST">
		<table>
			<tr>
				<td><b>Anket Yönetici Girişi</b></td>
			</tr>
			<tr>
				<td>Kullanıcı Adı</td>
				<td><input type="text" name="kullanici_adi"></input></td>
			</tr>
			<tr>
				<td>Şifre</td>
				<td><input type="password" name="sifre"></input></td>
			</tr>
			<tr>
				<td><input type="submit" name="gonder "value="Gönder"></input></td> <!-- button un type'ını submit yapmayı unutma yoksa post etmez -->
			</tr>
		</table>
	</form>
	</body>
</html>