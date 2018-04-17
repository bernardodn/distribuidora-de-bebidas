<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
  <!-- area de campos do form -->
  <hr />

  <div class="row">
    <div class="form-group col-md-6">
      <label for="campo1">Nome</label>
      <input type="text" class="form-control" name="product['name']" value="<?php echo $product['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Data de Fabricação</label>
      <input type="text" class="form-control" name="product['fab_date']" value="<?php echo $product['fab_date']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Data de Validade</label>
      <input type="text" class="form-control" name="product['val_date']" value="<?php echo $product['val_date']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo4">Quantidade</label>
      <input type="text" class="form-control" name="product['amount']" value="<?php echo $product['amount']; ?>">
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