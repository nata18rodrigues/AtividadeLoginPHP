<?php

$id = $_GET['id'];

$sql = "
    DELETE FROM produtos
    WHERE id = {$id}
    ";
include("database/database.php");
$con->query($sql);
$con->close();
header("location:index.php")

?>