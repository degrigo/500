<?php 

require_once 'database-usuarios.php'; 

$id = $_POST['id'];

deletaUsuario($id);

header("Location:index.php");