<?php
  
	class InfoUser
	{
		public function mostrar()
		{
			include_once '../../conexao.php'; 

			$sql = "SELECT * FROM usuario ORDER BY idUsuario ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
				//echo "<a href='../../model/alterar.php?id=".$row['id']."'>Editar</a>";
			}

			if (!$resultados) {
				throw new Exception("Nenhum pruduto no estoque!");
			}
			
			return $resultados;
		}
	}
	

?>