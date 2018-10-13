<?php echo form_open('grupo/edit/'.$grupo['IDGrupo'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricão</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $grupo['descricao']); ?>" class="form-control" id="descricao" />
			<span class="text-danger"><?php echo form_error('descricao');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>
	
<?php echo form_close(); ?>