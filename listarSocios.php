<!DOCTYPE html>
<html lang="pt">
    <head>
        <!--área reservada para as meta tags -->
        <meta charset="utf-8">
        <title>MEDIATECA</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Listagem dos Sócios</h1>
        <?php
        //estabelece a conexão à base de dados
        include 'includes/liga_bd.php';
    
        //crio a instrução sql para selecionar todos os registos
        $sql ="SELECT * FROM t_socio";
        // a variavel resultado vai guardar todos os dados de todos os clientes
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //variavel para contar os registos
        $conta=0;
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            
            echo "Id: ". $linha['id']. "<br/>";
            echo "Nick: ". $linha['nick']. "<br/>";
            echo "Nome: ". $linha['nome']. "<br/>";
            echo "E-mail: ". $linha['email']. "<br/>";
            echo "Fotografia: ". $linha['fotografia']. "<br/>";
            ?>
            <br>
            <form action = "alterarSocio.php" method="post">
            <input type="hidden" name="id" value="<?php echo $linha['id'];?>"><br>
            <input type="submit" value="Alterar Sócios">

            </form> <br>
            <?php
            echo "<hr/>";
            $conta=$conta+1;
        }
        mysqli_close($ligacao);
        echo "<br/>";
        echo "<b>Numero de sócios na base de dados -> " . $conta . "</b>";
        ?>
        <br/>
        <a href="login2.php" target="_self">Volta ao Menu</a>
    </body>
</html>