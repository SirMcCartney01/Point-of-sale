<?php

	include("conexion.php");

	$link = Conectar();

	$nombre = $_GET["usuario"];
	$pass = $_GET["contraseña"];

	$query = mysqli_query($link, "SELECT * FROM login WHERE usuario  = '".$nombre."' and contraseña = '".$pass."'");
	$nr = mysqli_num_rows($query);

	if($nr == 1)
	{
		header("Location: http://192.168.1.9/Proyecto/html/ventas.html");
	}
	else
	{
		header("Location: http://192.168.1.9/Proyecto/html/loginError.html");
	}
?>