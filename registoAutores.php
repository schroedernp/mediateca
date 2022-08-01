<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5000;url=index.html">
        <link type="text/css" rel="stylesheet" href="recursos/style/style.css">
        <title>Mediateca Bookeze</title>      
    </head>
    <body>
        <h1>Registo de Autores</h1>
        <?php
        
    include 'includes/liga_bd.php';

            $sql ="INSERT INTO t_autor (nome, nacionalidade) VALUES ('$_POST[nome]', '$_POST[nacionalidade]')";
            echo $sql;
            if (mysqli_query($ligacao, $sql))
            echo "<h2>Registo efetuado com sucesso!</h2>";
         
        mysqli_close($ligacao);
        //echo "<br/>";
        ?>
        <br/>
        <a href="login2.php" target="_self">Voltar ao Menu</a>       
    </body>
</html>