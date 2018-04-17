<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Produto <?php echo $product['name']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome</dt>
	<dd><?php echo $product['name']; ?></dd>

	<dt>Data de Fabricação</dt>
	<dd><?php echo $product['fab_date']; ?></dd>

	<dt>Data de Validade</dt>
	<dd><?php echo $product['val_date']; ?></dd>
	
	<dt>Quantidade</dt>
	<dd><?php echo $product['amount']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>