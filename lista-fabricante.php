<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Fabricante;
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

$quantidadeFabricantes = Fabricante::getQuantidadeFabricantes($where);

//onde trocar a quantidade de fabricantes por paginas
$obPagination = new Pagination($quantidadeFabricantes, $_GET['pagina'] ?? 1, 10);

$fabricantes = Fabricante::getFabricantes($where,null,$obPagination->getLimit());


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem-fabricante.php';
include __DIR__.'/includes/footer.php';


