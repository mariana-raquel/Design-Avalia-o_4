<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Inserindo Livros </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <body>
        <?php 
        $bd = mysqli_connect("localhost", "root", "", "Livraria");
        if (mysqli_connect_error()) {
            echo "<p class='a3'> Erro ao conectar com o banco </p>" . mysqli_connect_error($bd);
        }
        else {
            $nome = (isset($_POST["nome"]) ) ? $_POST["nome"]: null;
            $autor = (isset($_POST["autor"]) ) ? $_POST["autor"]: null;
            $genero = (isset($_POST["genero"]) ) ? $_POST["genero"]: null;
            $editora = (isset($_POST["editora"]) ) ? $_POST["editora"]: null;
            $data = (isset($_POST["data"]) ) ? $_POST["data"]: null;
            $pagina = (isset($_POST["ndepaginas"]) ) ? $_POST["ndepaginas"]: null;
            $preço = (isset($_POST["preço"]) ) ? $_POST["preço"]: null;

            $inserir = "INSERT INTO Livraria  (Nome, Autor, Gênero, Editora, Publicação, Páginas, Preço) VALUES ('$nome', '$autor', '$genero', '$editora', '$data', '$pagina', '$preço' )";
            if (mysqli_query($bd, $inserir)) {
                echo "<p class='a3'> Livro inserido com sucesso! </p>";
            }
            else {
                echo "<p class='a3'> Erro: " . mysqli_error($bd) . "</p>";
            }
        }
            mysqli_close($bd);
        ?>
    </body>
</html>