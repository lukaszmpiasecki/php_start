<?php
session_start();
//inicjacja sesji, sprawdzenie czy wartości przyszły POST-em
if (isset($_POST['login']))
{
	$walidacja=true; //zmienna sprawdza, czy walidacja się powiodła
	
	//Wpisanie wartości do zmiennych
	$login = $_POST['login'];
	$haslo = $_POST['haslo'];
	$haslo2 = $_POST['haslo2'];
	$mail = $_POST['mail'];
	
	//Walidacja po stronie serwera
	if ( strlen($login) < 3 || strlen($login) > 25) //login krotszy/dluzszy niz
	{

	}
	
	
	if($walidacja)
	{
		//wpis do DB
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="skrypt.js"></script>
<title> Zarejestruj swoje konto </title>
</head>
<body class="reg">


<form method="post">
Login:
</br>
<input type="text" name="login" autocomplete="off" onFocus="wypiszUwagi('login')"> </input> <div id="infologin"></div>
</br>
Hasło:
</br>
<input type="password" name="haslo" ></input>
</br></br>
Powtórz hasło:
</br>
<input type="password" name="haslo2"></input>
</br></br>
E-mail:
</br>
<input type="text" name="mail"></input>
</br></br>
<input type="submit" value="Zarejestruj"></input>
</form>
<div id="panel"></div>
</body>
