<?php
  
  	class Artista
	{
		public function mostrar()
		{
			include_once '../../conexao.php'; 

			$sql = "SELECT * FROM artista ORDER BY idArtista ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
				//echo "<a href='../../model/altArtista.php?id=".$row['id']."'>Editar</a>";
			}

			if (!$resultados) {
				throw new Exception("Nenhum artista encontrado!");
			}
			
			return $resultados;
		}
	}

?>