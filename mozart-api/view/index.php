
<!DOCTYPE >
<html>
<head>
    <title>Principal</title>
</head>
<body>
    <div class="corpo" style="background-color: #ccc; text-align: center;">
        <h1>Página principal</h1>
       
    </div>
    <form action= "../model/recebe.php" method="post">
        <p>Nome:<input type="text" name="nome"/><p/>
        <p>Sobrenome:<input type="text" name="sobrenome"/></p>
        <p>Contato:<input type="text" name="contato"/></p>
        <p>Data de Nascimento:<input type="text" name="dataNascimento"/></p>
        <p>Foto:<input type="text" name="foto"/></p>
        <p>Email:<input type="text" name="email"/><p/>
        <p>Senha:<input type="password" name="senha"/><p/> 

        <p><input type="submit" name="cadastrar" value="cadastrar"></p>

        <a href="alterar.php">Alterar</a><br/>
        <a href="excluir.php">Excluir</a><br/>
        <a href="cadProjeto.php">Cadastrar-projeto</a><br/>
        <a href="cadArtista.php">Cadastrar-Artista</a>
    </form>
   
</body>
</html>