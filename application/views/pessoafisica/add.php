<?php echo form_open('pessoafisica/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cpf" class="col-md-4 control-label">Cpf</label>
		<div class="col-md-8">
			<input type="text" name="cpf" value="<?php echo $this->input->post('cpf'); ?>" class="form-control" id="cpf" />
		</div>
	</div>
	<div class="form-group">
		<label for="rg" class="col-md-4 control-label">Rg</label>
		<div class="col-md-8">
			<input type="text" name="rg" value="<?php echo $this->input->post('rg'); ?>" class="form-control" id="rg" />
		</div>
	</div>
	<div class="form-group">
		<label for="dataNascimento" class="col-md-4 control-label">DataNascimento</label>
		<div class="col-md-8">
			<input type="text" name="dataNascimento" value="<?php echo $this->input->post('dataNascimento'); ?>" class="form-control" id="dataNascimento" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>