<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5000;url=index.html">
        <link type="text/css" rel="stylesheet" href="recursos/style/style.css">
        <title>Mediateca</title>      
    </head>
    <body>
        <h1>Registo de Sócios</h1>
        <?php
        
    include 'includes/liga_bd.php';
    include 'includes/valida_foto.php';

    if ($uploadOk == 0){
        echo "O seu ficheiro não foi enviado.";
    }else{
        if($uploadOk==1){
            move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file);
            $tmp=password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $sql ="INSERT INTO t_socio (nick, senha, nome, email, fotografia) VALUES
            ('$_POST[nick]', '".$tmp."', '$_POST[nome]', '$_POST[email]', '".$foto."')";
            echo $sql;
            if (mysqli_query($ligacao, $sql))
            echo "<h2>Registo efetuado com sucesso!</h2>";
        }
    }        
        mysqli_close($ligacao);
        //echo "<br/>";
        ?>
        <br/>
        <a href="index.html" target="_self">Voltar ao Menu</a>       
    </body>
</html>