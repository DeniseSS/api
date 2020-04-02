<?php 


try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
$id = 9; 
   

  
   
  $insere = $con->prepare('DELETE FROM projeto WHERE idProjeto = :id');
  $insere ->bindValue(':id', $id); 

 
 if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados Excluidos com sucesso!";
                $id = null;
                
            } else {
                echo "Erro ao tentar excluir cadastro";
            }
        
}  

     
 
?>