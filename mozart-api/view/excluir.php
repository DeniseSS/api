<?php

try{

include_once '../control/usuario.php';
include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
 
//Select

    //$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql= "SELECT * FROM usuario WHERE idUsuario = '9'";
    $resultado = $con->prepare($sql); 
    $resultado -> execute();
    $row= $resultado->fetch(PDO::FETCH_ASSOC);
    

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar</title>
    </head>
    <body>
        <form  action="../model/delete.php" method="post" >
                    <input type ="hidden" value="<?php if(isset($row['idUsuario'])){ echo $row ['idUsuario'];}?>" name="id " id="editar"> 
                    <div class="input-field col s12">
                        <label for ="nome">Nome</label>
                        <input type="text" name="nome" id="nome" value="<?php if(isset($row['nome'])){ echo $row ['nome'];} ?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" value="<?php if(isset($row['sobrenome'])){ echo $row ['sobrenome'];} ?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Email</label>
                        <input type="text" name="email" id="email" value="<?php if (isset($row['email'])){echo $row['email'];}?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Senha</label>
                        <input type="text" name="senha" id="senha" value="<?php if (isset($row['senha'])){echo $row['senha'];}?>">
                        
                    </div>
                    <div class="input-field col s12">
                        <label for ="nome">Contato</label>
                        <input type="text" name="contato" id="contato" value="<?php if (isset($row['contato'])){echo $row['contato'];}?>">
                        
                    </div>
                     <div class="input-field col s12">
                        <label for ="nome">Data nascimento</label>
                        <input type="text" name="dataNascimento" id="contato" value="<?php if (isset($row['dataNascimento'])){echo $row['dataNascimento'];}?>">
                        
                    </div>
                     <div class="input-field col s12">
                        <label for ="nome">Foto</label>
                        <input type="text" name="foto" id="foto" value="<?php if (isset($row['foto'])){echo $row['foto'];}?>">
                        
                    </div>
                    
                    <button type="submit" name="btn-delete" class="btn green">Delete</button>        
            </form>
        </body>
    </html> 
                
        
    </body>
</html>
