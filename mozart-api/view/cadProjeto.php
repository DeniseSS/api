
<!DOCTYPE >
<html>
<head>
    <title>Cadastrar Projeto</title>
</head>
<body>
    <div class="corpo" style="background-color: #ccc; text-align: center;">
        <h1>Cadastrar Projeto</h1>
        
    </div>
    <form action= "../model/recebeProjeto.php" method="post">
        <p>Titulo:<input type="text" name="titulo"/><p/>
        <p>Descrição:<input type="text" name="descricao"/></p>
        <p>imagens:<input type="text" name="imagens"/></p>
        

        <p><input type="submit" name="cadastrar" value="cadastrar"></p>

    </form>
        <a href="altProjeto.php">Alterar</a>
        <a href="delprojeto.php">Excluir</a>
        <a href="index.php">Voltar</a>
   
</body>
</html>