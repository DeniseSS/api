
<?php
include_once '../control/usuario.php';
include_once '../control/artista.php';
try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}
 
//Select

    //$id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql= "SELECT A.idUsuario, A.nome, A.sobrenome, A.contato, A.email, A.senha, A.dataNascimento,A.foto, B.idSeguimento, B.nomeSeguimento, C.idArtista, C.descricao FROM dbmozarte.usuario A,seguimento B, artista C WHERE idUsuario = '5'";
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
        <form  action="../model/updateArtista.php" method="post" >
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
                    <div class="input-field col s12">
                        <label for ="nome">Descrição</label>
                        <input type="text" name="descricao" id="descricao" value="<?php if (isset($row['descricao'])){echo $row['descricao'];}?>">
                        
                    </div>
                     <div class="input-field col s12">
                        <label for ="nome">Seguimento</label>
                        <input type="text" name="seguimento" id="seguimento" value="<?php if (isset($row['nomeSeguimento'])){echo $row['nomeSeguimento'];}?>">
                        
                    </div>

                    <button type="submit" name="btn-editar" class="btn green">Atualizar</button>        
            </form>
           
        </body>
    </html> 
         
        
    </body>
</html>
