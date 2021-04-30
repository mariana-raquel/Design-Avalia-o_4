<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Consultando Tabela </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <script> 
        
    </script>
    <body>
        <?php 
        $bd = mysqli_connect("localhost", "root", "", "Livraria");
        if (mysqli_connect_error()) {
            echo "<p class='a6'> Erro ao conectar com o banco </p>" . mysqli_connect_error($bd);
        }
        else {
            $livros = "SELECT * FROM Livraria";
			$resultado = mysqli_query($bd, $livros);
			echo "<h2 class='b6'> Livros: </h2>";
            echo "<table border='1' id='tabela'>";
            echo "<tr>";
            echo "<th> Nome: </th>";
            echo "<th> Autor: </th>";
            echo "<th> Gênero: </th>";
            echo "<th> Editora: </th>";
            echo "<th> Publicação: </th>";
            echo "<th> Número de Páginas: </th>";
            echo "<th> Preço: (Aproximado em R$) </th>";
            echo "</tr>";
			while($livro = mysqli_fetch_array($resultado)) {
                echo "<tr>";
                echo "<td> $livro[Nome] </td>";
                echo "<td> $livro[Autor] </td>";
                echo "<td> $livro[Gênero] </td>";
                echo "<td> $livro[Editora] </td>";
                echo "<td> $livro[Publicação] </td>";
                echo "<td> $livro[Páginas] </td>";
                echo "<td> $livro[Preço] </td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($bd);
        }
        ?>
    </body>
</html>