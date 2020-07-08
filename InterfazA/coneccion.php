<?php
 	$dbname = "autobus";
 	$servername = "db4free.net";
 	$username = "isa";
 	$password= "azul1495"

 	$conn = new mysql($servername, $username, $password, $dbname);

 		if($conn->connect_error){
 		die("conexion fallida:".$conn->connect_error);
 		}
 	?>