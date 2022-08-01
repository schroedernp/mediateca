<?php
ob_start();
//session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
        <meta http-equiv="refresh" content="400;url=index.html">
    </head>
    <body>
        <h1>Alteração de Autores</h1>

    <?php
    //liga a base de dados
    include 'includes/liga_bd.php';
  
    $sql = "UPDATE t_autor SET nome='$_POST[nome]', nacionalidade='$_POST[nacionalidade]' WHERE id=$_POST[id]";
        
    if (mysqli_query($ligacao, $sql))
        echo "<h3>Autor alterado com sucesso!</h3>";
    mysqli_close($ligacao); echo "<br/>";
    ?>
    <br/><h4>Aguarde que será redirecionado</h4><a href="login2.php" target="_self">Volta ao menu</a>
    </body>
</html>