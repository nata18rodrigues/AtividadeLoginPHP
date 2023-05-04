<?php
include("layout/topo.php");
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

<h1>Cadastrar produto</h1>
  
<form method="post" action="salvar_produto.php">
  <div class="form-group">
    <label>Nome do produto</label>
    <input type="text" name ="nome" class="form-control" placeholder="Calça Jeans">
  </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" name="preco" class="form-control" placeholder="50.89">
  </div>
  
  <div class="form-group">
    <label>Quantidade de estoque</label>
    <input type="text" name="quantidade" class="form-control" placeholder="10">
  </div>
  
  <div class="form-group">
    <label>Peso</label>
    <input type="text" name="peso" class="form-control" placeholder="0.8">
  </div>

  <button type="submit" class="btn btn-sucess">Salvar</button>
</form>


</body>
</html>
<?php
include("layout/baixo.php");
?>