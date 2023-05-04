<?php
    //var_dump($_POST);

    include("database/database.php");//importação de codigo de conexão ao banco
    
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $peso = $_POST['peso'];

    $sql = "SELECT * FROM produtos WHERE nome='{$nome}'";
    $con->query($sql);
    $resultado = $con->query($sql)->fetch_assoc();
    if($resultado) {
        echo "Já existe";
    } else {
        $sql= "INSERT INTO produtos
            (nome, preco, quantidade, peso)
            VALUES
            ('{$nome}', {$preco}, {$quantidade}, {$peso})";
    
    $con->query($sql);
    $con->close();

    header("location: index.php");//redireciona
    }

    
?>


