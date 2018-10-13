<?php echo form_open('estoqueconsignado/edit/'.$estoqueconsignado['IDEstoqueConsignado'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="IDProduto" class="col-md-4 control-label">Produto</label>
		<div class="col-md-8">
			<select name="IDProduto" class="form-control">
				<option value="">select produto</option>
				<?php 
				foreach($all_produtos as $produto)
				{
					$selected = ($produto['IDProduto'] == $estoqueconsignado['IDProduto']) ? ' selected="selected"' : "";

					echo '<option value="'.$produto['IDProduto'].'" '.$selected.'>'.$produto['IDProduto'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDFilial" class="col-md-4 control-label">Filial</label>
		<div class="col-md-8">
			<select name="IDFilial" class="form-control">
				<option value="">select filial</option>
				<?php 
				foreach($all_filiais as $filial)
				{
					$selected = ($filial['IDFilial'] == $estoqueconsignado['IDFilial']) ? ' selected="selected"' : "";

					echo '<option value="'.$filial['IDFilial'].'" '.$selected.'>'.$filial['IDFilial'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="IDPessoa" class="col-md-4 control-label">Pessoa</label>
		<div class="col-md-8">
			<select name="IDPessoa" class="form-control">
				<option value="">select pessoa</option>
				<?php 
				foreach($all_pessoas as $pessoa)
				{
					$selected = ($pessoa['IDPessoa'] == $estoqueconsignado['IDPessoa']) ? ' selected="selected"' : "";

					echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['IDPessoa'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label">Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $estoqueconsignado['quantidade']); ?>" class="form-control" id="quantidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="movimento" class="col-md-4 control-label">Movimento</label>
		<div class="col-md-8">
			<input type="text" name="movimento" value="<?php echo ($this->input->post('movimento') ? $this->input->post('movimento') : $estoqueconsignado['movimento']); ?>" class="form-control" id="movimento" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>