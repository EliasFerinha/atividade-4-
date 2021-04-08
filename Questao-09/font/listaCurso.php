<?php
include_once "conexao.php";

//consultar no banco de dados
$result_disciplina = "SELECT * FROM cursos ORDER BY codigoCurso DESC";
$resultado_disciplina = mysqli_query($conn, $result_disciplina);

//Verificar se encontrou resultado na tabela "disciplinas"
if(($resultado_disciplina) AND ($resultado_disciplina->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Curso</th>
				<th>Satus</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while($row_disciplina = mysqli_fetch_assoc($resultado_disciplina)){
			$json = json_encode($row_disciplina);
			$resul = json_decode($json,true);
			print_r($json);
			//echo  $json-> nomeCurso;
			?>
			<tr>
				<td> <?php echo $resul['codigoCurso']; ?> </td>
				<td> <?php echo $resul['nomeCurso']; ?></td>
				<td> <?php echo $resul['statusCurso']; ?> </td>
			</tr>
			<?php
	}?>

		</tbody>
	</table>
<?php	
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
?>