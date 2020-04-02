<?php

include_once '../control/usuario.php';
include_once '../control/artista.php';

try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}



 $artista = new Artista();

 $descricao= $_POST["descricao"];
 $artista->setDescricao($descricao);


 	$sql = "SELECT A.idUsuario,  B.idSeguimento FROM  dbmozarte.usuario A, seguimento B ORDER BY idUsuario ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
				
				$fkUsuario= $row['idUsuario'];
				$fkSeguimento= $row['idSeguimento'];
			}
	
		$insere=$con->prepare("INSERT INTO artista (fkUsuario, fkSeguimento, descricao) values(:fkUsuario,:fkSeguimento, :descricao)");
		$insere->bindValue(":descricao","$descricao");
		$insere->bindValue(":fkUsuario","$fkUsuario");
		$insere->bindValue(":fkSeguimento","$fkSeguimento");


	if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $descricao= null;
                
                
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        
} 

?>