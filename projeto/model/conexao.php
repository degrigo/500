<?php

function conecta(){

	$host = "localhost";
	$user = "tadeu";
	$pass = "@da4linux";
	$dbname	= "escola";

	return mysqli_connect($host, $user, $pass, $dbname);

}

function desconecta($con) {

	mysqli_close($con);
	
}
