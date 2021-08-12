<?php 

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar Fabricante');

use \App\Entity\Fabricante;
$obFabricante = new Fabricante;

if(isset($_POST['nome'],$_POST['descricao'],$_POST['ativo'])){
	$obFabricante->nome  		= $_POST['nome'];
	$obFabricante->descricao 	= $_POST['descricao'];
	$obFabricante->ativo 		= $_POST['ativo'];
	$obFabricante->cadastrar();

	header('location:lista-fabricante.php?status=success');
	exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-fabricante.php';
include __DIR__.'/includes/footer.php';