<?php
	$server = "localhost";
	$user = "usename";
	$pass = "password";

		$conn = new mysqli($server,$user,$pass);

		if ($conn-.connect_error) 
			die("conexão falhou".mysqli_connect_error());
		else
			echo "conectado com sucesso!";
		?>
			
