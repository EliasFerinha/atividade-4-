<?php
	# enviando os dados para o banco de dados
	function insert($table, $data = array()){
		global $conn;

		# 1° parte da query
		$query = "INSERT INTO $table (";

		# 2° parte da query
		$campos = array_keys($data);
		$campos = implode(", ", $campos);

		# 3° parte da query
		$valores;
		foreach ($data as $key => $value) {
			# code...
			$valores .= "'$value', ";
		}

		$valores = substr($valores, 0, -2);

		$query .= "$campos ) VALUES ($valores)";
	
		# enviando os dados para o banco
		$ret = mysqli_query($conn, $query) or die (mysqli_error($conn));

		# testando se deu certo
		if ($ret) {
			echo "Enviado pro banco";
		}else{
			echo "Erro ao enviar";
		}

	}

	
?>