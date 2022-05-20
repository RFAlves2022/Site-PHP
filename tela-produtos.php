<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>CADASTRO DE PRODUTOS</h1>
    <form class="formulario" action="cadastra-produtos.php" method="post">
    Produto:<input name="produto" id="produto">
    <br>
    Marca:<input name="marca" id="marca">
    <br>
    Preço:<input name="preco" id="preco">
    <br>
    Quantidade:<input name="quantidade" id="quantidade">
    <br>
    Descrição:<textarea name="descricao" id="descricao"></textarea>
    <br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>