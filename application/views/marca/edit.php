<?php echo form_open('marca/edit/'.$marca['IDMarcas'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Descricao" class="col-md-4 control-label">Descrição</label>
		<div class="col-md-8">
			<input type="text" name="Descricao" value="<?php echo ($this->input->post('Descricao') ? $this->input->post('Descricao') : $marca['Descricao']); ?>" class="form-control" id="Descricao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>