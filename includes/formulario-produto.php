<main>
	<h2 class="mt-3"><?=TITLE?></h2>

	<form method="post">
		
		<div class="form-group">
			<label>Nome</label>
			<input type="text" class="form-control" name="nome" value="<?=$obProduto->nome?>">	
		</div>

		<div class="form-group">
			<label>Fabricante</label>
			<input type="text" class="form-control" name="fabricante" value="<?=$obProduto->fabricante?>">
		</div>

		<div class="form-group">
			<label>Preço</label>
			<input type="number" class="form-control" name="preco" value="<?=$obProduto->preco?>">
		</div>

		<div class="form-group">
			<label>Quantidade</label>
			<input type="number" class="form-control" name="quantidade" value="<?=$obProduto->quantidade?>">
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
					<input type="radio" name="ativo" value="n" <?=$obProduto->ativo == 'n' ? 'checked' : ''?> > Inativo
				</label>
			</div>
		</div>
		</br>
		<div class="form-group">
			<button type="submit" class="btn btn-success">SALVAR</button>
		</div>
	</form>
</main>