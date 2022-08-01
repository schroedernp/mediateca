<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
        <meta http-equiv="refresh" content="300;url=login2.php">
    </head>
    <body>
        <h1>Alterar dados Pessoais dos Usuários</h1>
    <?php

    include 'includes/valida.php';
    include 'includes/liga_bd.php';

    $tmp=password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if(empty($_FILES['ficheiro']['name'][0]))
    {
        $sql = "UPDATE t_socio SET
        nick='$_POST[nick]',
        nome='$_POST[nome]',
        email='$_POST[email]',
        senha='".$tmp."' WHERE id=$_POST[id]";
         
    }
    else
    {
        include 'includes/valida_foto.php';
        if ($uploadOk ==1){
            move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file);
            unlink('pics/'.$_POST['nome_foto']);
            $tmp=password_hash($_POST['senha'], PASSWORD_DEFAULT);

            $sql = "UPDATE t_socio SET
            nick='$_POST[nick]',
            nome='$_POST[nome]',
            email='$_POST[email]',
            senha='".$tmp."',
            fotografia='".$foto."' WHERE id=$_POST[id]";
        }
    }

    if (mysqli_query($ligacao, $sql))
        echo "<h3>utilizador alterado com sucesso!</h3>";
    mysqli_close($ligacao); echo "<br/>";
    ?>    
    <br/><h4>Aguarde que vai ser redirecionado</h4><a href="index.html" target="_self">Voltar ao menu</a> 
    </body>
</html>