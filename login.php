<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <!-- ao fim de 5 segundo redireciona para o index-->
        <meta http-equiv="refresh" content="5000;url=index.html">
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Validação de Utilizadores</h1>
        <?php
            // liga á base de dados
            include 'includes/liga_bd.php';
            
        //Verificar se existe variável de sessão, se usuario ja fez login anteriormente
        if(session_status() !== PHP_SESSION_ACTIVE){
            $sql =" SELECT * FROM t_socio WHERE nick ='$_POST[nick]'";
            //vou pesquisar apenas o registo com o nick enviado
            $resultado = mysqli_query($ligacao, $sql);
            //vou ao array resultado e obtenho a primeira linha
            $linha=mysqli_fetch_assoc($resultado);
            //caso nao exista a variavel linha
            if($linha==NULL)
                header('Location:erro.html');
            //caso o nickname exista tenho que verificar se a as senhas sao iguais....
            if(password_verify($_POST['senha'], $linha['senha']))
            {
                
                    echo "<h2>Login com sucesso!</h2>";
                    echo "<h2>Bem-vindo" .$linha['nome']."</h2>";
                session_start();
                $_SESSION['id'] = $linha['id'];
                $_SESSION['nick'] = $linha['nick'];
                header("Location: login2.php");
                exit();
                
            }//Caso se a senha esteja incorreta
            else{
                header("Location: erro.html");
                exit();
            }

        }
        
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4><a href="index.html" target="_self">Volta ao Menu</a>
    </body>
</html>