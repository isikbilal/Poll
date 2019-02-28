<meta charset="utf8"/>
<?php
class BaglantiHatasi extends Exception {}
class VeritabaniHatasi extends Exception {}
try
{
	if(mysqli_connect("localhost","root",""))
		echo "";
	else
	throw new BaglantiHatasi;
    if(mysqli_select_db("anket"))
		echo "";
	else
		throw new VeritabaniHatasi;
}
catch(BaglantiHatasi $e)
{
	echo "Veritabana Sunucusuna Bağlanılamadıbr/>";
}
catch(VeritabaniHatasi $e)
{
	echo "Veritabanına Bağlanılamadı<br/>";
}

?>