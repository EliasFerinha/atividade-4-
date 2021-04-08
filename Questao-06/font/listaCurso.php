<?php
include_once "conexao.php";

//consultar no banco de dados
$result_disciplina = "SELECT * FROM cursos ORDER BY codigoCurso DESC";
$resultado_disciplina = mysqli_query($conn, $result_disciplina);

//Verificar se encontrou resultado na tabela "disciplinas"
if(($resultado_disciplina) AND ($resultado_disciplina->num_rows != 0)){
	while($row_disciplina = mysqli_fetch_assoc($resultado_disciplina)){
		//$json = json_encode($row_disciplina);
		echo "Curso: ".$row_disciplina['nomeCurso']." &nbsp "."Status: ".$row_disciplina['statusCurso']."<br>";
		//print_r($json);
	}
}else{
	echo "Nenhum usuário encontrado";
}