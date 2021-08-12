<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar produto');

use \App\Entity\Produto;
$obProduto = new Produto;

if(isset($_POST['nome'],$_POST['fabricante'],$_POST['preco'],$_POST['quantidade'],$_POST['ativo'])){

	$obProduto->nome 		= $_POST['nome'];
	$obProduto->fabricante  = $_POST['fabricante'];
	$obProduto->preco 		= $_POST['preco'];
	$obProduto->quantidade  = $_POST['quantidade'];
	$obProduto->ativo 		= $_POST['ativo'];
	$obProduto->cadastrar();

	header('location:index.php?status=success');
	exit;
}


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-produto.php';
include __DIR__.'/includes/footer.php';