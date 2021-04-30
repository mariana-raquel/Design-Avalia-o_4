<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Excluindo Livros </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <body>
        <form action="Excluindo_Livros.php" method="POST">
            <fieldset id="fieldset">
            <label id="label"> Deseja excluir qual livro?</label>
            <input type="text" name="excluir" id="input">
            <br>
            <input type="submit" name="enviar" id="botão3">
            </fieldset>
        </form>
        <?php 
        $bd = mysqli_connect("localhost", "root", "", "Livraria");
        if (mysqli_connect_error()) {
            echo "<p class='a5'> Erro ao conectar com o banco </p>" . mysqli_connect_error($bd);
        }
        else {
            $le = (isset($_POST["excluir"]) ) ? $_POST["excluir"]: null;
            $deletar = "DELETE FROM Livraria WHERE Nome ='$le'";
            $click = (isset($_POST["enviar"]) ) ? true : false;
            if ($click == true) {
                if (mysqli_query($bd,$deletar)) {
                    echo "<p class='a5'> Registro excluído com sucesso! </p>";
                }
                else {
                    echo "<p class='a5'> Erro: </p>" . mysqli_error($bd);
                }
            }
            mysqli_close($bd);
        }
        ?>
    </body>
</html>