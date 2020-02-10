<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="skrypt.js"></script>
<title> Zarejestruj swoje konto </title>
</head>
<body class="reg" onload="stoper();">


<form method="post">
Login:
</br>
<input type="text" name="login"></input>
</br></br>
Hasło:
</br>
<input type="password" name="haslo"></input>
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