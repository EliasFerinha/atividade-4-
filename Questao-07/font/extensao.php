<?php 
	class DAO extends Connect {
		public function select_tabela(){
			$pdo = parent::getInstance();
			$query = "SELECT nomeCurso, statusCurso FROM cursos WHERE statusCurso ='Ativo'";

			$procura = $pdo->prepare($query);

			$procura->execute();

			$data = array();
			if ($procura->rowCount()) {
				while ($resultado = $procura->fetch(PDO::FETCH_ASSOC)) {
					$data[] = $resultado;
				}
				return $data;
			}

			return false;
		}
	} 
?>