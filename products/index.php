<?php
    require_once('functions.php');
    index();
?>
<?php include('modal.php'); ?>
<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Produto</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Data de Fabricação</th>
		<th>Data de Validade</th>
		<th>Quantidade</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($products) : ?>
<?php foreach ($products as $products) : ?>
	<tr>
		<td><?php echo $products['id']; ?></td>
		<td><?php echo $products['name']; ?></td>
		<td><?php echo $products['fab_date']; ?></td>
		<td><?php echo $products['val_date']; ?></td>
		<td><?php echo $products['amount']; ?></td>
		<td>
			<a href="view.php?id=<?php echo $products['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
			<a href="edit.php?id=<?php echo $products['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-users="<?php echo $products['id']; ?>">
				<i class="fa fa-trash"></i>
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>
