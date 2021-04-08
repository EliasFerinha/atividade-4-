<?php
session_start();
include_once("conexao.php");

$curso = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

//echo "Nome: $curso <br>";
//echo "E-mail: $status <br>";

$result_usuario = "INSERT INTO cursos (nomeCurso, statusCurso ) VALUES ('$curso', '$status')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Curso cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Curso não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
