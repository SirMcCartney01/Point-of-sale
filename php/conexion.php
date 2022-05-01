<?php
	
	function Conectar()
	{
		$dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "eleventa";

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if(!$conn)
        {
            die("No hay conexión" .mysqli_connect_error());
        }
        return $conn;
	}
    
?>