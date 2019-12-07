
<?php

require_once "connect_sql.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
	echo "ERROR";
}
else{
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	echo "CONNECT TO DATABASE";
	$polaczenie->close();
}





?>
