<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php
    include("layout/topo.php");
    include("database/database.php"); //importação de codigo de conexão ao banco
    $sql = "SELECT * FROM produtos";
    $result = $con->query($sql);
    // var_dump($result)
    ?>


    <h1>Cadastro de produtos</h1>

    <a href="novo_produto.php" class="btn btn-primary">Novo produto</a>

    <br>
    <br>
    <table class="table table-sm table-dark">
        <thead>
            <td>Id</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Quantidade</td>
            <td>Peso</td>
            <td>Alterar</td>
            <td>Excluir</td>
        </thead>

        <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['preco'] . "</td>
                        <td>" . $row['quantidade'] . "</td>
                        <td>" . $row['peso'] . "</td>
                        <td> <a href='" . $url . "/alterar_produto.php?id=" . $row['id'] . "'> ✏️ </a></td>
                        <td> <a href='" . $url . "/excluir_produto.php?id=" . $row['id'] . "'> 🗑️ </a></td>
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