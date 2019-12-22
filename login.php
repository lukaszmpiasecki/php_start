
<?php

require_once "connect_sql.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
	echo "ERROR: ".$polaczenie->connect_errno;
}
else{
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	$zapytanie = "SELECT * FROM CZYTELNICY WHERE login='$login' AND haslo='$haslo'";
	if ($wynik = $polaczenie->query($zapytanie))
	{
		$ile = $wynik->num_rows;
		if ($ile>0)
		{
			echo "JEST TAKI";
		}
		else
		{
			echo "NIE MA TAKIEGO NUMERU";
		}
	}
	$polaczenie->close();
}





?>
