<!DOCTYPE html>
<html lang="pt">
    <head>
        <!--área reservada para as meta tags -->
        <meta charset="utf-8">
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
        <title>MEDIATECA BOOKEZE</title>
    </head>
    <body>
        <h1>Listagem de Alugueres</h1>
        <?php
        //estabelece a conexão à base de dados
        include 'includes/liga_bd.php';
        //crio a instrução sql para selecionar todos os registos
        $sql ="SELECT * FROM t_aluguer";
        // a variavel resultado vai guardar todos os dados de todos os clientes
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //variavel para contar os registos
        $conta=0;
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            
            echo "Id: ". $linha['id']. "<br/>";
            echo "Id Sócio: ". $linha['id_socio']. "<br/>";
            echo "Isbn: ". $linha['isbn']. "<br/>";
            echo "Data de Início: ". $linha['data_incio']. "<br/>";
            echo "Data de Fim: ". $linha['data_fim']. "<br/>";
            echo "Valor: ". $linha['valor']. "<br/>";
        
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