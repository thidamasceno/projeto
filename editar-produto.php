<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar produto');

use \App\Entity\Produto;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
	header('location: index.php?status=error');
	exit;
}

$obProduto = Produto::getProduto($_GET['id']);
if(!$obProduto instanceof Produto){
	header('location: index.php?status=error');
	exit;	
}

if(isset($_POST['nome'],$_POST['fabricante'],$_POST['preco'],$_POST['quantidade'],$_POST['ativo'])){

	$obProduto->nome 		= $_POST['nome'];
	$obProduto->fabricante  = $_POST['fabricante'];
	$obProduto->preco 		= $_POST['preco'];
	$obProduto->quantidade  = $_POST['quantidade'];
	$obProduto->ativo 		= $_POST['ativo'];
	$obProduto->Atualizar();

	header('location:index.php?status=success');
	exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-produto.php';
include __DIR__.'/includes/footer.php';