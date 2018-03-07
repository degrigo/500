<?php 

echo "<pre>";

$host = "localhost";
$user = "tadeu";
$pass = "@da4linux";
$db	  = "tadeu";

$conection = mysqli_connect($host, $user, $pass, $db);

// Inserindo dados no banco utilizando mysqli_query(conexão, query sql)

mysqli_query($conection, "INSERT INTO posts (autor, post) VALUES (2, 'Meu quarto post');");
mysqli_query($conection, "INSERT INTO posts (autor, post) VALUES (3, 'Meu quarto post');");

var_dump($conection);