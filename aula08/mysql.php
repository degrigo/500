<?php

echo "<pre>";

// mysqli_query passa como parâmetros conexão e query SQL
// mysqli_fetch_assoc exibe os valores com array associativo

$host = "localhost";
$user = "tadeu";
$pass = "@da4linux";
$db	  = "tadeu";

$conection = mysqli_connect($host, $user, $pass, $db);

$query = "SELECT * FROM posts";
$result = mysqli_query($conection, $query);

while ($row = mysqli_fetch_assoc($result)) {
	echo "Post: {$row['autor']} <br>";
	echo "Post: {$row['post']} <br>";
	echo "<hr>";
	// print_r($row);
}