<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Formulário </title>
        <?php echo "<link rel='stylesheet' type='text/css' href='Avaliação_4.css'>" ?>
    </head>
    <body>
        <h2 id="a"> Adicione um livro à "Livraria Ler & Aprender":</h2>
        <form action="Inserindo_Livros.php" method="POST">
            <fieldset id="b">
            <label> Nome: </label>
            <input type="text" name="nome">
            <br><br>
            <label> Autor: </label>
            <input type="text" name="autor">
            <br><br>
            <label> Gênero: </label>
            <input type="text" name="genero">
            <br><br>
            <label> Editora: </label>
            <input type="text" name="editora">
            <br><br>
            <label> Data de publicação: </label>
            <input type="text" name="data">
            <br><br>
            <label> Número de páginas: </label>
            <input type="text" name="ndepaginas">
            <br><br>
            <label> Preço: </label>
            <input type="text" name="preço">
            <br><br>
            <input type="submit" name="Enviar" value="Enviar" id="botão">
            <input type="reset" name="limpar" value="Limpar tudo" id="botão2">
            </fieldset>
        </form>
    </body>
</html>