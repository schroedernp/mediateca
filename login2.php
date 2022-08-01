<html>
    <head>
        <meta charset="utf-8">
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
        <title>Mediateca Bookeze</title>

    </head>
    <body>
        <h1>Bem-vindo a Bookeze! </h1>
        <?php
             
           include 'includes/valida.php';

             echo "<h2>Login com sucesso!</h2>";
             echo "<h2> Bem-vindo " .$_SESSION['nick']."</h2>";
        ?>
        
        <br>
        <form action= "perfil.php" method="post">
            <input type="hidden" name="categoria" value="1">
            <input type="submit" value="Editar Perfil">
        </form>
        <form action= "listarLivros.php" method="post">
            <input type="hidden" name="categoria" value="0">
            <input type="submit" value="Ver Livros">
        </form>

        <form action= "historico.php" method="post">
            <input type="hidden" name="categoria" value="0">
            <input type="submit" value="Historico">
        </form>

        <form action= "logout.php" method="post">
            <input type="hidden" name="categoria" value="0">
            <input type="submit" value="Logout">
        </form>



        <?php
      if(strcmp($_SESSION['nick'], "natashaadmin")==0)

      {
           ?>

           <br><br> <h2>Área de Administração</h2>
           <input type="button" value="Lista/Alterar Autores" onclick="window.open('listar.php', '_self')">
           <input type="button" value="Inserir Autores" onclick="window.open('registarAutores.html', '_self')">
           <br><br>
           <input type="button" value="Lista/Alterar Livros" onclick="window.open('listarLivros.php', '_self')">
           <input type="button" value="Inserir Livros" onclick="window.open('registarLivros.html', '_self')">
           <br><br>
           <input type="button" value="Listar Alugueres" onclick="window.open('listarAluguer.php', '_self')">
           <input type="button" value="Inserir Alugueres" onclick="window.open('registarAluguer.html', '_self')">
           <br><br>
           <input type="button" value="Listar/Alterar Sócios" onclick="window.open('listarSocios.php', '_self')">
       <?php
            }
       ?>

    </body>
</html>