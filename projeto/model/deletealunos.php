<?php

require_once 'alunosdb.php'; 

$id = $_POST['id'];

deletarAluno($id);

header("Location:admin/alunos.php");