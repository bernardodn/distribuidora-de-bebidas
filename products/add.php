<?php 
require_once('functions.php'); 
add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Produto</h2>

<form action="add.php" method="post">
	<hr />
	<div class="row">
		<div class="form-group col-md-6">
			<label for="campo1">Nome do produto</label>
			<input type="text" class="form-control" name="product['name']">
		</div>
	</div>	
	<div class="row">
		<div class="form-group col-md-2">
			<label for="campo2">Data de Fabricação</label>
			<input type="date" class="form-control" name="product['fab_date']">
		</div>	
	</div>	
	<div class="row">
		<div class="form-group col-md-2">
			<label for="campo3">Data de Validade</label>
			<input type="date" class="form-control" name="product['val_date']">
		</div>
	</div>
	<div class="row">
		<div class="form-group col-md-2">
			<label for="campo4">Quantidade</label>
			<input type="text" class="form-control" name="product['amount']">
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