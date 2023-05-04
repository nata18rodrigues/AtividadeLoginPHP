<?php

    $id = $_GET['id'];

    $sql = "
    DELETE FROM usuario
    WHERE id={$id}
    ";

    include("database/database.php");
    $con->query($sql); // aqui ele executa o INSERT no banco de dados
    
    header("location: usuario.php");

?>