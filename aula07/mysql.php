<?php 

echo "<pre>";

$host = "localhost";
$user = "tadeu";
$pass = "@da4linux";
$db	  = "tadeu";

$conection = mysqli_connect($host, $user, $pass, $db);

var_dump($conection);