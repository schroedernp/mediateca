<?php
ob_start();
//session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Medateca BOOKEZE</title>
        <meta http-equiv="refresh" content="400;url=index.html">
    </head>
    <body>
        <h1>Alteração de Livros</h1>

    <?php
    //liga a base de dados
    include 'includes/liga_bd.php';
  

    if(empty($_FILES['ficheiro']['name'][0]))
    {
        $sql = "UPDATE t_livro SET
        titulo='$_POST[titulo]',
        descricao='$_POST[descricao]',
        autor=$_POST[autor],
        n_pag=$_POST[n_pag],
        preco_semana=$_POST[preco_semana],
        WHERE isbn=$_POST[isbn]";
    }
    //caso tenha trocado a imagem
    else
    {
        include 'includes/valida_foto.php';
        if ($uploadOk == 1) {

            move_uploaded_file($_FILES["ficheiro2"]["tmp_name"], $target_file);
            unlink('capa/'.$_POST['capa']);
            $sql = "UPDATE t_livro SET
            titulo='$_POST[titulo]',
            descricao='$_POST[descricao]',
            autor=$_POST[autor],
            n_pag=$_POST[n_pag],
            preco_semana=$_POST[preco_semana],
            capa='".$foto."',
            WHERE isbn=$_POST[isbn]";
        }
    }

    if (mysqli_query($ligacao, $sql))
        echo "<h3>Livro alterado com sucesso!</h3>";
    mysqli_close($ligacao); echo "<br/>";
    ?>
    <br/><h4>Aguarde que será redirecionado</h4><a href="login2.php" target="_self">Volta ao menu</a>
    </body>
</html>