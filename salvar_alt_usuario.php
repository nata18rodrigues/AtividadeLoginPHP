
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$chave = $_POST['chave'];

include("database/database.php"); //importação de codigo de conexão ao banco

$sql = "
    UPDATE usuario
    SET nome= '{$nome}',
        usuario= '{$usuario}',
        senha= '{$senha}',
        email= '{$email}',
        chave=  '{$chave}'
        WHERE id= {$id}
    ";

// var_dump($sql);
$con->query($sql);
$con->close();


header("location: usuario.php"); //redireciona

?>