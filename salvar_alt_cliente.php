<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$cidade_nasc = $_POST['cidade_nasc'];
$ativo = $_POST['ativo'];

include("database/database.php");//importação de codigo de conexão ao banco

$sql = "
    UPDATE cliente 
        SET nome = '{$nome}',
        data_nascimento = '{$data_nascimento}',
        cidade_nasc = {$cidade_nasc},
        ativo = {$ativo}
    WHERE id = {$id}
    ";

    var_dump($sql);
    $con->query($sql);
    $con->close();
    

    header("location: cliente.php");//redireciona

?>