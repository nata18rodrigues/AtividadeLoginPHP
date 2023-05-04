<?php
    //var_dump($_POST);

    include("database/database.php");//importação de codigo de conexão ao banco
    
    $nome = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade_nasc = $_POST['cidade_nasc'];
    $ativo = $_POST['ativo'];

    $sql = "SELECT * FROM cliente WHERE nome='{$nome}'";
    $con->query($sql);
    $resultado = $con->query($sql)->fetch_assoc();
    if($resultado) {
        echo "Já existe";
    } else {
        $sql= "INSERT INTO cliente
            (nome, data_nascimento, cidade_nasc, ativo)
            VALUES
            ('{$nome}', '{$data_nascimento}', {$cidade_nasc}, {$ativo})";
        var_dump($sql);
    
    $con->query($sql);
    $con->close();

    header("location: cliente.php");//redireciona
    }

    
?>


