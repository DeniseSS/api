<?php

try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}

$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$imagens=$_POST['imagens'];


	$sql = "SELECT A.idArtista,  B.idSeguimento FROM  dbmozarte.artista A, seguimento B ORDER BY idArtista ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
				
				$fkArtista= $row['idArtista'];
				$fkSeguimento= $row['idSeguimento'];

			}


	$insere=$con->prepare("INSERT INTO projeto (fkArtista, fkSeguimento, titulo, descricao,imagens ) values(:fkArtista,:fkSeguimento, :titulo, :descricao, :imagens)");


	$insere->bindValue(":descricao","$descricao");
	$insere->bindValue(":titulo","$titulo");
	$insere->bindValue(":imagens","$imagens");
	$insere->bindValue(":fkSeguimento","$fkSeguimento");
	$insere->bindValue(":fkArtista","$fkArtista");

//$insere->execute();  

if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $titulo = null;
                $descricao = null;
                $imagens = null;
              
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        
}  


?>

