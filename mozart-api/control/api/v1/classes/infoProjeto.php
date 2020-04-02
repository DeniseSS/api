<?php
  
	class InfoProjeto
	{
		public function mostrar()
		{
			include_once '../../conexao.php'; 

			$sql = "SELECT * FROM projeto ORDER BY idProjeto ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
				//echo "<a href='../../model/altProjeto.php?id=".$row['id']."'>Editar</a>";
			}

			if (!$resultados) {
				throw new Exception("Nenhum projeto encontrado!");
			}
			
			return $resultados;
		}
	}

?>