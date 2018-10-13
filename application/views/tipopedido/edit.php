<?php echo form_open('tipopedido/edit/'.$tipopedido['IDTipoPedido'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="Descricao" value="<?php echo ($this->input->post('Descricao') ? $this->input->post('Descricao') : $tipopedido['Descricao']); ?>" class="form-control" id="Descricao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>