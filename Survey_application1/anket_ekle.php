<meta charset="UTF-8">
<?php
$con =mysqli_connect('localhost','root','');
	mysqli_mysqli_db('anket');
	if(@$_POST['ekle'])
	{
		$soru=$_POST['soru'];
		$secenek1=$_POST['secenek1'];
		$secenek2=$_POST['secenek2'];
		$secenek3=$_POST['secenek3'];
		$secenek4=$_POST['secenek4'];
		$secenek5=$_POST['secenek5'];
		$sorgu=mysqli_query("insert into sorular(soru,secenek1,secenek2,secenek3,secenek4,secenek5) value ('$soru','$secenek1','$secenek2','$secenek3','$secenek4','$secenek5')");
		
	}
	if(@$_POST['ekle'])
	{
		$id =mysqli_insert_id($con);
		$secenek1=$_POST['secenek1'];
		$secenek2=$_POST['secenek2'];
		$secenek3=$_POST['secenek3'];
		$secenek4=$_POST['secenek4'];
		$secenek5=$_POST['secenek5'];
		mysqli_query("insert into secenekler(soru_id,secenek,puan) values($id,'$secenek1',0),($id,'$secenek2',0),($id,'$secenek3',0),($id,'$secenek4',0),($id,'$secenek5',0);");
	}
?>

<?php

if(!isset($_SESSION['giris']))
{
	echo "Giriş İzniniz Yoktur....";
}
else
{
	echo"
	
<!DOCTYPE html>
<html>
	<title>Yeni Anket Ekleme Sayfası</title>
	<meta charset='UTF-8'/>
	<body>
		<form method='POST'>
			<table>
				<tr>
					<td><b>Anket Ekle</b></td>
				</tr>
				<tr>
					<td>Soru</td>
					<td><input type='text' name='soru'></input></td>
				</tr>
				<tr>
					<td>Seçenek 1 :</td>
					<td><input type='text' name='secenek1'></input></td>
				</tr>
				<tr>
					<td>Seçenek 2 :</td>
					<td><input type='text' name='secenek2'></input></td>
				</tr>
				<tr>
					<td>Seçenek 3 :</td>
					<td><input type='text' name='secenek3'></input></td>
				</tr>
				<tr>
					<td>Seçenek 4 :</td>
					<td><input type='text' name='secenek4'></input></td>
				</tr> 
				<tr>
					<td>Seçenek 5 :</td>
					<td><input type='text' name='secenek5'></input></td>
				</tr> 
				<tr>
					<td></td>
					<td><input type='submit' name='ekle' value='Ekle'></input></td>
				</tr> 
			</table>
		</form>
	</body>
</html>";
}