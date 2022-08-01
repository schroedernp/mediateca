<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Alterar Autor</h1>

    <?php

    //liga á base de dados
    
    include 'includes/liga_bd.php';


    $sql = "SELECT * FROM t_autor WHERE id =$_POST[id]";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
?>
    <form action="alterarAutor2.php" method="post">
    <p>Id:<input type="text" name="id" size="10" required value = "<?php echo $linha['id'];?>"></p>
    <p>Nome:<input type="text" name="nome" size="100" required value = "<?php echo $linha['nome'];?>"></p>
    <p>Nacionalidade:<input type="text" name="nacionalidade" size="50"  value = "<?php echo $linha['nacionalidade'];?>"></p>
   
    <input type="submit" name="Alterar">
    <br><br>
    <a href="login2.php" target="_self">Volta ao Menu</a>    
    </form>

<?php
mysqli_close($ligacao);
?>
    </body>
</html>