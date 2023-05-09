<?php
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"]) || !isset($_SESSION["nome"])) {
    header("Location: login.php");
    exit;
} else {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    $senha = $_SESSION["senha"];
}
?>