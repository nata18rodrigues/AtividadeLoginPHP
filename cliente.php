<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
<body>

<?php
    include("layout/topo.php");
    include("database/database.php");//importação de codigo de conexão ao banco
    $sql = "SELECT * FROM cliente";
    $result= $con->query($sql);
    // var_dump($result)
?>


<h1>Página do cliente</h1>

<a href="novo_cliente.php" class="btn btn-primary">Novo cliente</a>

<br>
<br>
<table class="table table-sm table-dark">
    <thead>
        <td>Id</td>
        <td>Nome</td>
        <td>Data Nascimento</td>
        <td>Cidade Nascimento</td>
        <td>Ativo</td>
        <td>Alterar</td>
        <td>Excluir</td>
    </thead>

    <tbody>
        <?php
            include(" constants/ constants.php");
            while($row = $result->fetch_assoc()){
                echo "<tr>
                        <td>" . $row['id']  ."</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['data_nascimento'] . "</td>
                        <td>" . $row['cidade_nasc'] . "</td>
                        <td>" . $row['ativo'] . "</td>
                        <td> <a href='/www/".$url."/alterar_cliente.php?id=".$row['id']."'> ✏️ </a></td>
                        <td> <a href='/www/".$url."/excluir_cliente.php?id=".$row['id']."'> 🗑️ </a></td>
                      </tr> 
                ";
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