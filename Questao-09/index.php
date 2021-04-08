<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

	</head>
	<body>		
		<div class="container">
			<div class="row">
				<div class="col-mod-8 offset-mod-2">
					<h1>Cadastrar Curso</h1>
					<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					?>
					<form method="POST" action="processa.php">
						<label>Curso: </label>
						<input type="text" class="form-control" name="curso" placeholder="Digite o nome do curso"><br><br>
						
						<label>Status: </label>
						<input type="text" class="form-control" name="status" placeholder="Digite o status do curso referente"><br><br>
					
						<input type="submit" class="btn btn-danger" value="Cadastrar">
						<a href="cursosCadastrados.php" class="btn btn-outline-success"> Visualisar  Cursos Cadastros </a>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>