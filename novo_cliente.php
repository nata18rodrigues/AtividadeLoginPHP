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

<h1>Cadastrar Cliente</h1>
  
<form method="post" action="salvar_cliente.php">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" name ="nome" class="form-control" placeholder="Natã">
  </div>

  <div class="form-group">
    <label>Data Nascimento</label>
    <input type="text" name="data_nascimento" class="form-control" placeholder="2002-01-18">
  </div>
  
  <div class="form-group">
    <label>Cidade Nascimento</label>
    <input type="text" name="cidade_nasc" class="form-control" placeholder="1660000">
  </div>
  
  <div class="form-group">
    <label>Ativo</label>
    <input type="number" max="1" min="0" name="ativo" class="form-control" placeholder="1">
  </div>

  <button type="submit" class="btn btn-sucess">Salvar</button>
</form>


</body>
</html>
<?php
include("layout/baixo.php");
?>