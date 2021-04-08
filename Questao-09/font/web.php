<!DOCTYPE HTML>
<html lang="pt-br"> 
 
    <head>  
        <meta charset="utf-8">
        <title>Cursos</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>
    <body>

    	<div class="container">
    		<h1><center>Cursos Cadastradas</center></h1>
	    	<?php include_once "listaCurso.php"; ?>
	    	<span id="conteudo"></span>	
    	</div>
    	
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
