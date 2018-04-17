<?php

require_once('../config.php');
require_once(DBAPI);

$products = null;
$product = null;

/**
 *  Listagem de Produtos
 */
function index() {
	global $products;
	$products = find_all('products');
}

/**
 *  Cadastro de Produtos
 */
function add() {

  if (!empty($_POST['product'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $product = $_POST['product'];
    //$user['modified'] = $user['created'] = $today->format("Y-m-d H:i:s");
    
    save('products', $product);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Produto
 */
function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['product'])) {

      $product = $_POST['product'];
      //$user['modified'] = $now->format("Y-m-d H:i:s");

      update('products', $id, $product);
      header('location: index.php');
    } else {

      global $product;
      $product = find('products', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Produto
 */
function view($id = null) {
  global $product;
  $product = find('products', $id);
}

/**
 *  Exclusão de um Produto
 */
function delete($id = null) {

  global $product;
  $product = remove('products', $id);

  header('location: index.php');
}