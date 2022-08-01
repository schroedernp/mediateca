<!DOCTYPE html>
<html lang="pt">
    <head>
        <!--área reservada para as meta tags -->
        <meta charset="utf-8">
        <title>MEDIATECA BOOKEZE</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Listagem de Livros</h1>
        <?php
        //estabelece a conexão à base de dados
        include 'includes/liga_bd.php';
        //crio a instrução sql para selecionar todos os registos
        $sql ="SELECT * FROM t_livro";
        // a variavel resultado vai guardar todos os dados de todos os clientes
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //variavel para contar os registos
        $conta=0;
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            
            echo "ISBN: ". $linha['isbn']. "<br/>";
            echo "Título: ". $linha['titulo']. "<br/>";
            echo "Descrição: ". $linha['descricao']. "<br/>";
            echo "Autor: ". $linha['autor']. "<br/>";
            echo "Número de páginas: ". $linha['n_pag']. "<br/>";
            echo "Preço semana: ". $linha['preco_semana']. "<br/>";
            echo "Capa: ". $linha['capa']. "<br/>";
            ?>
            <br>
            <form action = "registarAluguer.html" method="post">
            <input type="hidden" name="id" value="<?php echo $linha['id'];?>"><br>
            <input type="submit" value="Aluguer Livros">
            </form> <br>

            
            <?php
          
            echo "<hr/>";
            $conta=$conta+1;
        }
        mysqli_close($ligacao);
        echo "<br/>";
        echo "<b>Numero de livros na base de dados -> " . $conta . "</b>";
        ?>
        <br/>
        <a href="login2.php" target="_self">Volta ao Menu</a>
    </body>
</html>