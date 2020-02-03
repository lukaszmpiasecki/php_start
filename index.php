<?php
session_start();
if (isset($_SESSION['zalogowano']) && $_SESSION['zalogowano'] == true)
{
header('Location:panel_uzytkownika.php');
exit();
}
?>

<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<h1>Witaj na naszej stronie</h1>
<h2>Zaloguj się lub zarejestruj</h2>

<form action="login.php" method="post">
<b>Login:</b> </br>
<input type="text" name="login"></input>
</br></br>
<b>Hasło:</b> </br>
<input type="password" name="haslo"></input>
</br></br>
<input type="submit" value="Zaloguj"></input>
</form>
<a href="rejestracja.php"><input type="button" value="Zarejestruj się za darmo"></input></a>
<?php
if (isset($_SESSION['Error'])) echo $_SESSION['Error'];
unset($_SESSION['Error']);
?>
</body>
</html>