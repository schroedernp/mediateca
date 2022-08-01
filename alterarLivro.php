<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Alterar Livro </h1>
    <?php

    //liga á base de dados
    
    include 'includes/liga_bd.php';

    $sql = "SELECT * FROM t_livro WHERE isbn ='$_POST[isbn]'";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
    ?>

    <form action="alterarLivro2.php" method="post", enctype="multipart/form-data">
    <p>Isbn:<input type="text" name="isbn" size="100" readonly value = "<?php echo $linha['isbn'];?>"></p>
    <p>Título:<input type="text" name="titulo" size="100"  value = "<?php echo $linha['titulo'];?>"></p>
    <p>Descrição:<input type="text" name="descricao" size="100"  value = "<?php echo $linha['descricao'];?>"></p>
    <p>Autor:<input type="text" name="autor" size="50"  value = "<?php echo $linha['autor'];?>"></p>
    <p>Número de Páginas:<input type="text" name="n_pag" size="50"  value = "<?php echo $linha['n_pag'];?>"></p>
    <p>Preço semanal:<input type="text" name="preco_semana" size="50"  value = "<?php echo $linha['preco_semana'];?>"></p>
     Capa: <br> <img src= "capa/<?php echo $linha['capa'];?>" width = "150">
        <input type="hidden" name="capa" value="<?php echo $linha['capa'];?>">
    <br><br> Nova foto:  <input type="file" name="ficheiro2"><br><br>
    <input type="submit" name="Alterar">
    <br><br>
    <a href="login2.php" target="_self">Volta ao Menu</a>    
    </form>

<?php
mysqli_close($ligacao);
?>
    </body>
</html>