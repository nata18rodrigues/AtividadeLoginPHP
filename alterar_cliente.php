<?php
include("layout/topo.php");
$id = $_GET['id'];
include("database/database.php");//importação de codigo de conexão ao banco
$sql = "SELECT * FROM cliente WHERE id='{$id}'";
    $con->query($sql);
    $dados = $con->query($sql)->fetch_assoc();
    // var_dump($dados);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h1>Alteração de Cliente</h1>
  
<form method="post" action="salvar_alt_cliente.php">
<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" name ="nome" class="form-control" placeholder="Natã" value="<?php echo $dados['nome']; ?>">
  </div>

  <div class="form-group">
    <label>Data Nascimento</label>
    <input type="text" name="data_nascimento" class="form-control" placeholder="2002-01-18" value="<?php echo $dados['data_nascimento']; ?>">
  </div>
  
  <div class="form-group">
    <label>Cidade Nascimento</label>
    <input type="text" name="cidade_nasc" class="form-control" placeholder="16600000" value="<?php echo $dados['cidade_nasc']; ?>">
  </div>
  
  <div class="form-group">
    <label>Ativo</label>
    <input type="number" name="ativo" class="form-control" placeholder="1" max="1" min="0" value="<?php echo $dados['ativo']; ?>">
  </div>

  <button type="submit" class="btn btn-sucess">Salvar</button>
</form>


</body>
</html>
<?php
include("layout/baixo.php");
?>