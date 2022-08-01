<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Alteração Dados Pessoais dos Sócios</h1>
    <?php

    include 'includes/valida.php';
    include 'includes/liga_bd.php';

    $sql = "SELECT * FROM t_socio WHERE id=$_SESSION[id]";
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
?>
    <form action="perfil2.php" method="post" enctype="multipart/form-data">
        <p>Id:<input type="text" name="id" size="10" readonly value = "<?php echo $linha['id'];?>"></p>
        <p>Nick:<input type="text" name="nick" size="20" readonly value = "<?php echo $linha['nick'];?>"></p>
        Senha:<input type="password" size="20" name="senha" required><br><br>
        <p>Nome:<input type="text" name="nome" size="100" required  value = "<?php echo $linha['nome'];?>"></p>
        <p>E-mail:<input type="text" name="email" size="50" required  value = "<?php echo $linha['email'];?>"></p> 
        Foto:<br><img src="pics/<?php echo $linha['fotografia'];?>" width="150">
            <input type="hidden" name="nome_foto" value="<?php echo $linha['fotografia'];?>">
        <br><br>Nova foto:<input type="file" name="ficheiro"><br><br>
        <input type="submit" value="Alterar">
        <br><br>
        <a href="login2.php" target="_self">Voltar ao Menu</a>    
    </form>
<?php
mysqli_close($ligacao);
?>
    </body>
</html>