<meta charset="UTF-8">
<?php
session_start();
	if(!isset($_SESSION['giris']))
	{
		echo "Giriş İzniniz Bulunmamaktadır..";
	}
	else
	{
		echo "<!DOCTYPE html>
<html>
	<head>
		<title>Anket Yönetim Sayfası</title>
		<meta charset='UTF-8'>
	</head>
	<body>
		<table>
			<tr>
				<td>Anket Yönetim Sayfası</td>
			</tr>
			<tr>
				<td><a href='admin.php?islem=anket_ekle'>Yeni Anket Ekle</a></td>
			</tr>
			<tr>
				<td><a href='admin.php?islem=cikis'>Çıkış</a></td>
			</tr>
			<tr>
				<td>";
				
	}
	?>
				<?php
				$islem='';
				if(isset($_GET['islem']))
					$islem=$_GET['islem'];
				switch($islem)
				{
				case 'cikis';
					include('cikis.php');
				break;
				case 'anket_ekle';
				include('anket_ekle.php');
				}
				
				?>
				<?php
				echo"</td>
			</tr>
			
		</table>
	</body>
</html>";
?>

