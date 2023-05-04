<?php include("layout/topo.php");

$id = $_GET["id"];

$sql = "SELECT * FROM usuario WHERE id=" . $id;

include("database/database.php"); // pega a conexão com o banco de dados

$resultado = $con->query($sql);
$dados = $resultado->fetch_assoc();

//var_dump($dados);

?>

<h1>Alteração do Usuario</h1>

<form method="post" action="salvar_alt_usuario.php">
  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

  <div class="form-group">
    <label>Nome do Usuario</label>
    <input type="text" name="nome" class="form-control" placeholder="Qual é o novo nome do usuario"
      value="<?php echo $dados['nome']; ?>">
  </div>

  <div class="form-group">
    <label>Usuario</label>
    <input type="text" name="usuario" class="form-control" placeholder="usuario"
      value="<?php echo $dados['usuario']; ?>">
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="text" name="senha" class="form-control" placeholder="****" value="<?php echo $dados['senha']; ?>">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" placeholder="Qual é o novo email do usuario"
      value="<?php echo $dados['email']; ?>">
  </div>


  <div class="form-group">
    <label>Chave</label>
    <input type="text" name="chave" class="form-control" placeholder="chave" value="<?php echo $dados['chave']; ?>">
  </div>


  <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>