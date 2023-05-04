<?php

$id = $_GET['id'];

$sql = "
    DELETE FROM cliente
    WHERE id = {$id}
    ";
include("database/database.php");
$con->query($sql);
$con->close();
header("location:cliente.php")

?>