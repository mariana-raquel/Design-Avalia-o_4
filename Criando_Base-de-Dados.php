<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Criando Banco de Dados </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <body>
        <?php 
        $bd = mysqli_connect("localhost", "root", "");
        if (mysqli_connect_error()) {
             echo "<p class='a1'> Erro ao conectar com o banco </p>" . mysqli_connect_error();
        }
        else {  
            $nbd = "CREATE DATABASE Livraria"; 
            if (mysqli_query($bd, $nbd)) {
                echo "<p class='a1'> Base de dados criada com sucesso!</p>";
            }
            else {
                echo "<p class='a1'> Erro: " . mysqli_error($bd) . "</p>";
            }
            mysqli_close($bd);
        }
        ?>
    </body>
</html>