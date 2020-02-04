
<?php
//inicjacja zmiennej sesyjnej
session_start();
require_once "connect_sql.php";

//podąłczenie do DB
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
	echo "ERROR: ".$polaczenie->connect_errno;
	// Jeżeli połączenie nie jest możliwe, wyświetl błąd. 
}
else{
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	//prześlij hasło i login
	$login = htmlentities($login,ENT_QUOTES,"UTF-8");
	$haslo = htmlentities($haslo,ENT_QUOTES,"UTF-8");
	
	if ($wynik = $polaczenie->query(sprintf("SELECT * FROM CZYTELNICY WHERE login='%s' AND haslo='%s'",
	mysqli_real_escape_string($polaczenie,$login),
	mysqli_real_escape_string($polaczenie,$haslo))))
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
