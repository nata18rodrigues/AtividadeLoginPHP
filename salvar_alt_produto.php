<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$peso = $_POST['peso'];
$preco = $_POST['preco'];

include("database/database.php");//importação de codigo de conexão ao banco

$sql = "
    UPDATE produtos 
        SET nome = '{$nome}',
        quantidade = {$quantidade},
        preco = {$preco},
        peso = {$peso}
    WHERE id = {$id}
    ";

    var_dump($sql);
    $con->query($sql);
    $con->close();
    

    header("location: index.php");//redireciona

?>