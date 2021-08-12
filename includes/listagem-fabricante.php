<?php 

	$mensagem ='';
	if(isset($_GET['status'])){
		switch($_GET['status']){
		case 'success':
			$mensagem = '<div class="alert  alert-success">Ação executada com sucesso!</div>';
		break;

		case 'error':
			$mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
			break;
	}
}

	$resultados = '';
	foreach ($fabricantes as $fabricante){
		$resultados .= '<tr>
							<td>'.$fabricante->id.'</td>
							<td>'.$fabricante->nome.'</td>
							<td>'.$fabricante->descricao.'</td>
							<td>'.($fabricante->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
							<td>
							<a href="editar-fabricante.php?id='.$fabricante->id.'"><button type="button" class="btn btn-primary">Editar</button>
							</a>							
							<a href="excluir-fabricante.php?id='.$fabricante->id.'"><button type="button" class="btn btn-danger">Excluir</button>
							</a>
							</td>
							</tr>';
	}
	$resultados = strlen($resultados) ? $resultados : '<tr>
														<td colspan="6" class="text-center">Nenhum fabricante encontrado!
														</td>
														</tr>';
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

unset($_GET['status']);
unset($_GET['pagina']);

$gets = http_build_query($_GET);

$paginacao = '';
$paginas = $obPagination->getPages();
foreach($paginas as $key => $pagina){
	$class = $pagina['atual'] ? 'btn-primary' : 'btn-light';
	$paginacao .= '<a href="?pagina='.$pagina['pagina']."&".$gets.'"><button type="button" class="btn '.$class.'">'.$pagina['pagina'].'</button></a>';
}
?>

<main>
	<?=$mensagem?>
	<section>
		<form method="get">
			<div class="row my-4">
				<div class="col">
					<label>Busca fabricantes</label>
					<input type="text" name="busca" class="form-control" value="<?=$busca?>">
				</div>

				<div class="col">
					<label>Status</label>
					<select name="filtroStatus" class="form-control">
						<option value="s" <?=$filtroStatus == 's' ? 'selected' : ''?>>Ativo</option>
						<option value="n" <?=$filtroStatus == 'n' ? 'selected' : ''?>>Inativo</option>
						<option value="">Todos</option>
					</select>
				</div>

				<div class="col d-flex align-items-end">
					<button type="submit" class="btn btn-primary">Filtrar</button>	
				</div>
			</div>			
		</form>
	</section>
		<section>
		<table class="table bg-light mt-3" class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Status</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?=$resultados?>
			</tbody>
		</table>
	</section>

	<section>
		<?=$paginacao?>
	</section>
</main>