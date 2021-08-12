
<main>
	<h2 class="mt-3"><?=TITLE?></h2>

	<form id="fabricante" method="post">
		
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome" value="<?=$obFabricante->nome?>">	
		</div>

		<div class="form-group">
			<label>Descrição</label>
			<input type="text" class="form-control" name="descricao" value="<?=$obFabricante->descricao?>">
		</div>

		<div class="form-group">
		</br>
			<label>Status</label>
			<div class="form-check form-check-inline">
				<label class="form-control">
					<input type="radio" name="ativo" value="s" checked> Ativo
				</label>
			</div>

			<div class="form-check form-check-inline">
				<label class="form-control">
					<input type="radio" name="ativo" value="n" <?=$obFabricante->ativo == 'n' ? 'checked' : ''?> > Inativo
				</label>
			</div>
		</div>
		</br>
		<div class="form-group">
			<button type="submit" class="btn btn-success">SALVAR</button>
		</div>
	</form>
</main>