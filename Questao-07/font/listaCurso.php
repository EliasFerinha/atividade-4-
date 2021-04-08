<?php
	# Requerindo os arquivos de conexão e mapeamento do banco de dados 
	include_once 'conexao.php';
	include_once 'extensao.php';

	$dao = new DAO();
	$cursos = $dao->select_tabela();

	echo "<h1>Lista dos Cursos Ativos</h1>";
	
	$json = json_encode($cursos);
	print_r($json);
		
?>