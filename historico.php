<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mediateca Bookeze</title>
        <link href="recursos/style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>-----Aluguer de Livros------</h1>
        <?php

        include 'includes/valida.php';

        include 'includes/liga_bd.php';
            ?>
            <br>
            <table>
            <tr>
                <td><b>ID</b></td>
                <td><b>ID Socio</b></td><td><b>ISBN</b></td>
                <td><b>Data Inicio</b></td><td><b>Data Fim</b></td>
                <td><b>Valor</b></td>
            </tr>
            <?php
                $sql ="SELECT * FROM t_aluguer WHERE id_socio=".$_SESSION['id'];

                $resultado=mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));

            while($linha = mysqli_fetch_assoc($resultado))
            {
                echo "<tr><td>".$linha['id']."</td><td>".$linha['id_socio']."</td><td>".$linha['isbn']."</td><td>".$linha['data_incio']."</td>";
                echo "<td>".$linha['data_fim']."</td><td>".$linha['valor']."</td>";
                ?>
                </td></tr>
            <?php
            }
            ?>
        </table>
        </body>
        </html>