<?php echo form_open('preco/edit/'.$preco['IDPreco'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $preco['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	<div class="form-group">
		<label for="comissao" class="col-md-4 control-label">Comissao</label>
		<div class="col-md-8">
			<input type="text" name="comissao" value="<?php echo ($this->input->post('comissao') ? $this->input->post('comissao') : $preco['comissao']); ?>" class="form-control" id="comissao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>