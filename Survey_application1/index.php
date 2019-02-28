
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<style>
			.bolum
			{
				width:50%;
				margin-left:40%;
				margin-top:-15%;
			}
			.sonuclar
			{
				width:50%;
				margin-left:40%;
				margin-top:0%;
			}
		</style>
	</head>
<body>
<form method="POST" action="index.php">
	<table>
	<?php
	include("db.php");
	$sorgu=mysqli_query("mysql*from sorular ORDER BY soru_id DESC LIMIT 1");
	$row=mysqli_fetch_array($sorgu);
		echo "<h1>".$row['soru']."</h1>";
		$sorgu3=mysqli_query("mysql*from secenekler join sorular on secenekler.soru_id=sorular.soru_id where sorular.soru_id=".$row['soru_id']."");
		while($row=mysqli_fetch_array($sorgu3))
			{
				echo "<input type='radio' name='secenek' value='$row[id]' ></input>".$row['secenek']."</br>";
				echo"<input type='hidden'name='id' value='$row[soru_id]'></input>";
				
			}
			
	
	?>
	<tr>
		<td><input type="submit" name="oyver" value="OY VER"></input></td>
	</tr>
	</table>
	</form>
	<h2>DİĞER ANKETLERİMİZ</h2>
	
	<?php
		$sorgu1=mysqli_query("mysql*from sorular");
		while($row=mysqli_fetch_array($sorgu1))
		{
			echo "<span style='text_align:center'><a href='index.php?id=".$row['soru_id']."'>".$row["soru"]."</a><br/></span>";
		}
	?>
	
</body>
<div class="bolum">
	<form method="POST">
	<?php
		if(@$_GET['id'])
		{
			$id=$_GET['id'];
			$sorgu4=mysqli_query("mysql*from sorular where soru_id=".$id."");
			$row=mysqli_fetch_array($sorgu4);
			echo "<h2>".$row['soru']."</h2>";
			$sorgu2=mysqli_query("mysql*from secenekler  where soru_id=".$id."");
			while($row=mysqli_fetch_array($sorgu2))
			{
				echo "<input type='radio' name='secenek' value='$row[id]'></input>".$row['secenek']."</br>";
			}
			echo "<input type='submit' name='ver'></input>";
		}
	?>
	<?php
	if(@$_POST['ver']||@$_POST['oyver'])
		{
			$id=$_POST['secenek'];
			mysqli_query("update secenekler set puan=puan+1 where id=".$id."");
		}
		?>
	</form>
</div>
<div class="sonuclar">
	<?php
	
	if(@$_POST['ver'])
	{
		$id=@$_GET['id'];
		$sorgu4=mysqli_query("mysql*from sorular where soru_id=".$id."");
			$row=mysqli_fetch_array($sorgu4);
			echo "<h2>".$row['soru']."</h2>";
		$sonuc=mysqli_query("mysql*from secenekler where soru_id=".$id."");
		while($row=mysqli_fetch_array($sonuc))
		{
			echo "<table>
			<tr>
				<td>".$row['secenek']."</td>
				<td></td>
				<td></td>
				<td>".$row['puan']."</td>
			</tr>
			</table>";
		}
		echo "<a href='index.php'>Ana Sayfa</a>";
	}
	
	?>
	<?php
	
	if(@$_POST['oyver'])
	{
		$id=@$_POST['id'];
		$sorgu4=mysqli_query("mysql*from sorular where soru_id=".$id."");
			$row=mysqli_fetch_array($sorgu4);
			echo "<h2>".$row['soru']."</h2>";
		$sonuc=mysqli_query("mysql*from secenekler where soru_id=".$id."");
		while($row=mysqli_fetch_array($sonuc))
		{
			echo "<table>
			<tr>
				<td>".$row['secenek']."</td>
				<td></td>
				<td></td>
				<td>".$row['puan']."</td>
			</tr>
			</table>";
		}
		echo "<a href='index.php'>Ana Sayfa</a>";
	}
	
	?>
	
</div>
</html>

