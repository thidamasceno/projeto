<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use \App\Db\Pagination;

$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);
$filtroStatus = filter_input(INPUT_GET, 'filtroStatus', FILTER_SANITIZE_STRING);
$filtroStatus = in_array($filtroStatus,['s','n']) ? $filtroStatus : '';

$condicoes = [
	strlen($busca) ? 'nome LIKE "%'.str_replace(' ', '%', $busca).'%"' : null,
	strlen($filtroStatus) ? 'ativo = "'.$filtroStatus.'"' : null
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ',$condicoes);

$quantidadeProdutos = Produto::getQuantidadeProdutos($where);

//onde trocar a quantidade de produtos por paginas
$obPagination = new Pagination($quantidadeProdutos, $_GET['pagina'] ?? 1, 10);

$produtos = Produto::getProdutos($where,null,$obPagination->getLimit());


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-produto.php';
include __DIR__.'/includes/footer.php';


