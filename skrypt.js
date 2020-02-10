var licznik = 0;

function stoper()
{
	
	document.getElementById("panel").innerHTML = licznik++;
	setTimeout("stoper()",1000);
}
