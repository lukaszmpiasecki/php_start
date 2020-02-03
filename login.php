
<?php

session_start();
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
			$_SESSION['zalogowano']=true;
			$rekord = $wynik->fetch_assoc();
			$_SESSION['ID']=$rekord['ID'];
			$_SESSION['Login']=$rekord['Login'];
			$_SESSION['Imie']=$rekord['Imie'];
			$_SESSION['Nazwisko']=$rekord['Nazwisko'];
			$_SESSION['Email']=$rekord['Email'];
			$wynik->close();
			header('Location: panel_uzytkownika.php');
			unset($_SESSION['Error']);
		}
		else
		{
			$_SESSION['Error']='<div id="error"> Nieprawidłowy login lub hasło </div>';
			header('Location: index.php');
		}
	}
	$polaczenie->close();
}





?>
