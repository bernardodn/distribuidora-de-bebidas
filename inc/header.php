<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Distribuidora de Bebidas</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
    body {
        padding-top: 50px;
        padding-bottom: 20px;
    }
</style>
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<?php 
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['login'];
?>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo BASEURL; ?>inicio.php" class="navbar-brand">Distribuidora de Bebidas</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">          
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Usuários <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>users">Gerenciar Usuários</a></li>
                            <li><a href="<?php echo BASEURL; ?>users/add.php">Novo Usuário</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Produtos <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>products">Gerenciar Produtos</a></li>
                            <li><a href="<?php echo BASEURL; ?>products/add.php">Novo Produto</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem-vindo(a), <?php echo "$logado"; ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo BASEURL; ?>logout.php"><i class="fa fa-sign-out"></i> Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <main class="container">