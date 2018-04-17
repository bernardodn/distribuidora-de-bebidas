<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuário <?php echo $user['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Login</dt>
	<dd><?php echo $user['login']; ?></dd>

	<dt>Nome</dt>
	<dd><?php echo $user['name']; ?></dd>

	<dt>Status</dt>
	<dd><?php echo $user['status']; ?></dd>
	
	<dt>Tipo de usuário</dt>
	<dd><?php echo $user['user_type']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $user['created']; ?></dd>
</dl>


<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>