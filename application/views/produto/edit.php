<?php echo form_open('produto/edit/'.$produto['IDProduto'],array("class"=>"form-horizontal")); ?>

 <div class="form-group">
	 <label for="IDGrupo" class="col-md-4 control-label">Grupo</label>
		<div class="col-md-8">
			<select name="IDGrupo" class="form-control">
				<option value="">selecione grupo</option>
				<?php 
				foreach($all_grupos as $grupo)
				{
					$selected = ($grupo['IDGrupo'] == $produto['IDGrupo']) ? ' selected="selected"' : "";
					echo '<option value="'.$grupo['IDGrupo'].'" '.$selected.'>'.$grupo['descricao'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDCategoria" class="col-md-4 control-label">Categoria</label>
		<div class="col-md-8">
			<select name="IDCategoria" class="form-control">
				<option value="">select categoria</option>
				<?php 
				foreach($all_categorias as $categoria)
				{
					$selected = ($categoria['IDCategoria'] == $produto['IDCategoria']) ? ' selected="selected"' : "";

					echo '<option value="'.$categoria['IDCategoria'].'" '.$selected.'>'.$categoria['descricao'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDMarcas" class="col-md-4 control-label">Marca</label>
		<div class="col-md-8">
			<select name="IDMarcas" class="form-control">
				<option value="">select marca</option>
				<?php 
				foreach($all_marcas as $marca)
				{
					$selected = ($marca['IDMarcas'] == $produto['IDMarcas']) ? ' selected="selected"' : "";

					echo '<option value="'.$marca['IDMarcas'].'" '.$selected.'>'.$marca['Descricao'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDfornecedor" class="col-md-4 control-label">Fornecedor</label>
		<div class="col-md-8">
			<select name="IDfornecedor" class="form-control">
				<option value="">select fornecedor</option>
				<?php 
				foreach($all_fornecedores as $fornecedor)
				{
					$selected = ($fornecedor['IDFornecedor'] == $produto['IDfornecedor']) ? ' selected="selected"' : "";

					echo '<option value="'.$fornecedor['IDFornecedor'].'" '.$selected.'>'.$fornecedor['nome'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDUnidade" class="col-md-4 control-label">Unidade</label>
		<div class="col-md-8">
			<select name="IDUnidade" class="form-control">
				<option value="">select unidade</option>
				<?php 
				foreach($all_unidades as $unidade)
				{
					$selected = ($unidade['IDUnidades'] == $produto['IDUnidade']) ? ' selected="selected"' : "";

					echo '<option value="'.$unidade['IDUnidades'].'" '.$selected.'>'.$unidade['descricao'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome_produto" value="<?php echo ($this->input->post('nome_produto') ? $this->input->post('nome_produto') : $produto['nome_produto']); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="codigo" class="col-md-4 control-label">Código</label>
		<div class="col-md-8">
			<input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $produto['codigo']); ?>" class="form-control" id="codigo" />
		</div>
	</div>
	<div class="form-group">
		<label for="precoCusto" class="col-md-4 control-label">Preço Custo</label>
		<div class="col-md-8">
			<input type="text" name="precoCusto" value="<?php echo ($this->input->post('precoCusto') ? $this->input->post('precoCusto') : $produto['precoCusto']); ?>" class="form-control" id="precoCusto" />
		</div>
	</div>
	<div class="form-group">
		<label for="precoVenda" class="col-md-4 control-label">Preço Venda</label>
		<div class="col-md-8">
			<input type="text" name="precoVenda" value="<?php echo ($this->input->post('precoVenda') ? $this->input->post('precoVenda') : $produto['precoVenda']); ?>" class="form-control" id="precoVenda" />
		</div>
	</div>
	<div class="form-group">
		<label for="situacao" class="col-md-4 control-label">Situação</label>
		<div class="col-md-8">
			<input type="text" name="situacao" value="<?php echo ($this->input->post('situacao') ? $this->input->post('situacao') : $produto['situacao']); ?>" class="form-control" id="situacao" />
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descrição</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $produto['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="codBarras" class="col-md-4 control-label">Cod. Barras</label>
		<div class="col-md-8">
			<input type="text" name="codBarras" value="<?php echo ($this->input->post('codBarras') ? $this->input->post('codBarras') : $produto['codBarras']); ?>" class="form-control" id="codBarras" />
		</div>
	</div>
	<div class="form-group">
		<label for="foto" class="col-md-4 control-label">Foto</label>
		<div class="col-md-8">
			<input type="text" name="foto" value="<?php echo ($this->input->post('foto') ? $this->input->post('foto') : $produto['foto']); ?>" class="form-control" id="foto" />
		</div>
	</div>
	<div class="form-group">
		<label for="dataCadastro" class="col-md-4 control-label">Data Cadastro</label>
		<div class="col-md-8">
			<input type="date" name="dataCadastro" value="<?php echo ($this->input->post('dataCadastro') ? $this->input->post('dataCadastro') : $produto['dataCadastro']); ?>" class="form-control" id="dataCadastro" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>