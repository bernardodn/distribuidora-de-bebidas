<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Usuário</h2>

<form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-6">
      <label for="campo1">Nome</label>
      <input type="text" class="form-control" name="user['name']" value="<?php echo $user['name']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo2">Login</label>
      <input type="text" class="form-control" name="user['login']" value="<?php echo $user['login']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo3">Senha</label>
      <input type="password" class="form-control" name="user['password']" value="<?php echo $user['password']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-1">
      <label for="campo4">Status</label>
      <input type="text" class="form-control" name="user['status']" value="<?php echo $user['status']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo5">Tipo de usuário</label>
      <input type="text" class="form-control" name="user['user_type']" value="<?php echo $user['user_type']; ?>">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo6">Data de Cadastro</label>
      <input type="text" class="form-control" name="user['created']" disabled value="<?php echo $user['created']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>