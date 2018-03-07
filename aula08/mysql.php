<?php

echo "<pre>";

$host = "localhost";
$user = "tadeu";
$pass = "@da4linux";
$db	  = "tadeu";

$conection = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM posts";
$result = mysqli_query($conection, $query);

while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
}