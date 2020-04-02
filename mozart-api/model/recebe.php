<?php

include_once '../control/usuario.php';
include_once '../control/artista.php';

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


//insere

$insere=$con->prepare("INSERT INTO usuario (nome, sobrenome, email, senha, foto, contato, dataNascimento) values(:nome, :sobrenome, :email, :senha,:foto,:contato,:dataNascimento )");

$insere->bindValue(":nome","$nome");
$insere->bindValue(":sobrenome","$sobrenome");
$insere->bindValue(":email","$email");    
$insere->bindValue(":senha","$senha");
$insere->bindValue(":foto","$foto");
$insere->bindValue(":contato","$contato");
$insere->bindValue(":dataNascimento","$dataNascimento");

//$insere->execute();  

if ($insere->execute()) {
            if ($insere->rowCount() > 0) {
                echo "Dados cadastrados com sucesso!";
                $nome= null;
                $email = null;
                $senha = null;
                
            } else {
                echo "Erro ao tentar efetivar cadastro";
            }
        
} 






?>