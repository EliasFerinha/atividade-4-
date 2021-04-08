<!DOCTYPE HTML>
<html lang="pt-br"> 
 
    <head>  
        <meta charset="utf-8">
        <title>Cursos</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    	<h1><center>Cursos Cadastrados</center></h1>
    	<?php include_once "listaCurso.php"; ?>
    	<span id="conteudo"></span>	
		<script>		
			$(document).ready(function () {
				$.post('listaCurso.php', function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			});
		</script>
	</body>
 </html>
