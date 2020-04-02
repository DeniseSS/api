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

 $seguimento=$_POST["seguimento"];



$insere=$con->prepare("UPDATE artista A, usuario B SET A.descricao=:descricao, B.contato=:contato, B.nome=:nome, B.sobrenome=:sobrenome, B.email=:email, B.senha=:senha, B.dataNascimento=:dataNascimento, B.foto=:foto where idUsuario = 6 and FkUsuario = 6 ");

$insere->bindValue(":nome","$nome");
$insere->bindValue(":sobrenome","$sobrenome");    
$insere->bindValue(":email","$email");
$insere->bindValue(":senha","$senha");
$insere->bindValue(":contato","$contato");
$insere->bindValue(":foto","$foto");
$insere->bindValue(":dataNascimento","$dataNascimento");
$insere->bindValue(":descricao","$descricao");


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