<?php
include_once '../control/usuario.php';
try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
 
//Select

    //$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql= "SELECT * FROM projeto WHERE idProjeto = '9'";
    $resultado = $con->prepare($sql); 
    $resultado -> execute();
    $row= $resultado->fetch(PDO::FETCH_ASSOC);
    

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excluir dados</title>
    </head>
    <body>
        <h1>Projeto</h1>
        <form  action="../model/deleteProjeto.php" method="post" >
                    <input type ="hidden" value="<?php if(isset($row['idUsuario'])){ echo $row ['idProj'];}?>" name="id " id="editar"> 
                    <div class="input-field col s12">
                        <label for ="nome">Titulo</label>
                        <input type="text" name="titulo" id="nome" value="<?php if(isset($row['titulo'])){ echo $row ['titulo'];} ?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Descrição</label>
                        <input type="text" name="descricao" id="descricao" value="<?php if(isset($row['descricao'])){ echo $row ['descricao'];} ?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Imagens</label>
                        <input type="text" name="imagens" id="imagens" value="<?php if (isset($row['imagens'])){echo $row['imagens'];}?>">
                        
                    </div>
                    
                    <button type="submit" name="btn-editar" class="btn green">Excluir</button>        
            </form>
           
        </body>
    </html> 
                
        
    </body>
</html>