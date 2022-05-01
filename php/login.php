<?php

	include("conexion.php");

	$link = Conectar();

	$nombre = $_GET["usuario"];
	$pass = $_GET["contraseña"];

	$query = mysqli_query($link, "SELECT * FROM login WHERE usuario  = '".$nombre."' and contraseña = '".$pass."'");
	$nr = mysqli_num_rows($query);

	if($nr == 1)
	{
		header("Location: ../html/ventas.html");
	}
	else
	{
		header("Location: ../html/loginError.html");
	}
?>
