<?php

include_once '../control/usuario.php';

try{

include_once '../control/conexao.php';
}
catch(PDOException $e){
 echo $e->getMessage();
 
}



 $usuario = new Usuario();

 $nome= $_POST["nome"];
 $usuario->setNome($nome);

 $sobrenome=$_POST["sobrenome"];
 $usuario->setSobrenome($sobrenome);

 $contato=$_POST["contato"];
 $usuario->setContato($contato);

 $foto=$_POST["foto"];
 $usuario->setFoto($foto);

 $dataNascimento=$_POST["dataNascimento"];
 $usuario->setDataNasc($dataNascimento);


 $email=$_POST["email"];
 $usuario->setEmail($email);


 $senha=$_POST["senha"];
 $usuario->setSenha($senha);


$insere=$con->prepare("UPDATE usuario SET nome=:nome, sobrenome=:sobrenome, email=:email,  senha=:senha , contato=:contato, foto=:foto WHERE idUsuario = 5 ");

$insere->bindValue(":nome","$nome");
$insere->bindValue(":sobrenome","$sobrenome");    
$insere->bindValue(":email","$email");
$insere->bindValue(":senha","$senha");
$insere->bindValue(":contato","$contato");
$insere->bindValue(":foto","$foto");


//$insere->execute();  

if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados alterados com sucesso!";
                $nome = null;
                $sobrenome = null;
                $email = null;
                $senha = null;
                $contato = null;
                $foto = null;
                
            } else {
                echo "Erro ao tentar alterar cadastro";
            }
        
}  


?>