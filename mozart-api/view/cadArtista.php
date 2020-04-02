<?php
include_once '../control/usuario.php';
include_once '../control/artista.php'
?>
<html>
<head>
    <title>Cadastro artista</title>
</head>
<body>
    <div class="corpo" style="background-color: #ccc; text-align: center;">
      <h1>Cadastrar artista</h1>
      <form action= "../model/recebeArtista.php" method="post">
        <p> Descrição artista:<input type="text" name="descricao"/><p/>
        
        <p><input type="submit" name="cadastrar" value="cadastrar"></p>

    </form>
        <a href="altArtista.php">Alterar</a>
        <a href="delArtista.php">Excluir</a>
        <a href="index.php">Voltar</a>
        
    </div>
    
   
</body>
</html>