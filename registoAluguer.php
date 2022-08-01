<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5000;url=index.html">
        <link type="text/css" rel="stylesheet" href="recursos/style/style.css">
        <title>Mediateca Bookeze!</title>      
    </head>
    <body>
        <h1>Registo de Aluguer</h1>
        <?php
        
    include 'includes/liga_bd.php';


            $sql ="INSERT INTO t_aluguer (id_socio, isbn, data_incio, data_fim, valor) VALUES
            ($_POST[id_socio], '$_POST[isbn]', '$_POST[data_incio]', '$_POST[data_fim]', $_POST[valor])";
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