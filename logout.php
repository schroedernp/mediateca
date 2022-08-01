<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <meta http-equiv="refresh" content="500;url=index.html">
    </head>

    <body>
        <?php
            session_start();
            $_SESSION=array();
            session_destroy();
        ?>    
        <h1>Mediateca Bookeze</h1>
 
        <br>
        <h2>Logout efetuado com sucesso!</h2>
        <h3>Aguarde que vai ser redirecionado...</h3>

        <a href="index.html" target="_self">Voltar a tentar</a><br><br>

    </body>
</html>