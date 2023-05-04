<?php

    include("database/database.php");

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $chave = $_POST['chave'];

    $sql = "INSERT INTO usuario 
    (nome, usuario, senha, email, chave)
    VALUES
    ('{$nome}', '{$usuario}','{$senha}', '{$email}', '{$chave}')";


    $con->query($sql); // aqui ele executa o INSERT no banco de dados
    $con->close();

    //header("location: index.php"); ou usar esse aqui, ou script abaixo!
?>

<script>
    window.location = 'usuario.php'
   
    

</script>

