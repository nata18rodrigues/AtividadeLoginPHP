<?php
    //Conexão com banco

    //Qual é o banco?
    //Qual o endereço do banco?
    $local= '127.0.0.1:3306';
    $user= 'root';
    $pwd= 'root';
    $db= 'loja';

    $con= new mysqli($local, $user, $pwd, $db);

    if($con->connect_error){
        echo $con->connect_error;
    }
?>