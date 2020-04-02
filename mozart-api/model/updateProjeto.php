<?php

try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
//$id=filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$titulo=$_POST['titulo'];
$descricao=$_POST['descricao'];
$imagens=$_POST['imagens'];


$insere=$con->prepare("UPDATE projeto SET titulo=:titulo, descricao=:descricao, imagens=:imagens  WHERE idProjeto = 8");

$insere->bindValue(":titulo","$titulo");
$insere->bindValue(":descricao","$descricao");    
$insere->bindValue(":imagens","imagens");


//$insere->execute();  

if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados alterados com sucesso!";
                $titulo = null;
                $descricao = null;
                $imagens = null;
               
                
            } else {
                echo "Erro ao tentar alterar cadastro";
            }
        
}  


?>