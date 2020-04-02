<?php 

include_once '../control/usuario.php';
try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
$id = 8; 
   

  
   
  $insere = $con->prepare('DELETE FROM usuario WHERE idUsuario = :id');
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