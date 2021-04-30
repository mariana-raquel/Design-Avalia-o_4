<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Criando Tabela </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <body>
        <?php 
        $bd = mysqli_connect("localhost", "root", "", "Livraria");
        if (mysqli_connect_error()) {
            echo "<p class='a2'> Erro ao conectar com o banco </p>" . mysqli_connect_error($bd);
        }
        else {
            $tabela = "CREATE TABLE Livraria (Nome VARCHAR(100) NOT NULL, Autor VARCHAR (100) NOT NULL, Gênero VARCHAR(100) NOT NULL, Editora VARCHAR(100) NOT NULL, Publicação VARCHAR(100) NOT NULL, Páginas INT(100) NOT NULL, Preço VARCHAR(10) NOT NULL)";

            if (mysqli_query($bd, $tabela)) {
                echo "<p class='a2'> Tabela criada com sucesso! </p>";
            }
            else {
                echo "<p class='a2'> Erro: " . mysqli_error($bd) . "</p>";
            }
            mysqli_close($bd);
        }
        ?>
    </body>
</html>