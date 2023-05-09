<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>

<?php
    include("database/database.php");
    include("layout/topo.php");
    $sql = "SELECT * FROM usuario";
    $result = $con->query($sql);
?>

<h1>Cadastro de Usuario</h1>

<a href=novo_usuario.php class="btn btn-primary">Novo Usuario</a> 
<br>
<br>
<table class="table table-sm table-dark"">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Usuario</td>
        <td>Senha</td>
        <td>Email</td>
        <td>Chave</td>  
        <td>Alterar</td>
        <td>Excluir</td>      
        <td></td>
    </thead>
    <tbody>

    <?php

    while($row = $result->fetch_assoc())
    {
    
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['nome']."</td>
                <td>".$row['usuario']."</td>
                <td>".$row['senha']."</td>
                <td>".$row['email']."</td>
                <td>".$row['chave']."</td>
                <td><a href='".$url."/alterar_usuario.php?id=".$row['id']."'>  ✏️ </a></td>
                <td><a  href='".$url."/excluir_usuario.php?id=".$row['id']."'>  🗑️ </a></td>
            </tr>
         " ;   
    }

    ?>

    </tbody>
</table>

<?php
    $con->close();

    include("layout/baixo.php");
?>
</body>
</html>