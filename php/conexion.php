<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "usuarios";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(!$conn)
	{
		die("No hay conexión" .mysqli_connect_error());
	}
	$nombre = $_GET["usuario"];
	$pass = $_GET["contraseña"];

	$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario  = '".$nombre."' and contraseña = '".$pass."'");
	$nr = mysqli_num_rows($query);

	if($nr == 1)
	{
		header("Location: http://192.168.1.9/Proyecto/html/ventas.html");
	}
	if($nr == 0)
	{
		header("Location: http://192.168.1.9/Proyecto/html/loginError.html");
	}
?>