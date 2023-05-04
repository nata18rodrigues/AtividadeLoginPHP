
  <?php include("layout/topo.php"); ?>
  

<form method="post" action="salvar_usuario.php">
  <div class="form-group">
    <label>Nome do Usuario</label>
    <input type="text" name="nome" class="form-control"  placeholder="Diga qual é seu nome">
  </div>

  <div class="form-group">
    <label>Usuario</label>
    <input type="text" name="usuario" class="form-control"  placeholder="usuario">
  </div>

  <div class="form-group">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control"  placeholder="*****">
  </div>

 <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control"  placeholder="exemplo@gmail.com">
 </div>
  

 <div class="form-group">
    <label>Chave</label>
    <input type="text" name="chave" class="form-control"  placeholder="chave">
 </div>


 <button type="submit" class="btn btn-success">Salvar</button>
</form>

<?php include("layout/baixo.php"); ?>