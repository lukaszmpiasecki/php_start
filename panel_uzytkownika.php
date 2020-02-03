<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
session_start();
if (!isset($_SESSION['zalogowano']))
{
	header('Location: index.php');
	exit();
}
$id = $_SESSION['ID'];
$login = $_SESSION['Login'];
$imie = $_SESSION['Imie'];
$nazwisko = $_SESSION['Nazwisko'];
$email = $_SESSION['Email'];
?>
<a href=wyloguj.php><button type="button">Wyloguj</button></a>
</body>
</html>