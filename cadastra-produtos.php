<?php
$conexao = mysqli_connect("localhost","root","","suplementos");

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$descricao = $_POST['descricao'];

echo "{$produto} : {$marca} : {$preco}: {$quantidade} : {$descricao}";

$sql_inserir = "insert into tbsuplementos(produto, marca, preco, quantidade, descricao) values('{$produto}','{$marca}','{$preco}',' $quantidade}','{$descricao}')";

mysqli_query($conexao,$sql_inserir);

mysqli_close($conexao);
?>