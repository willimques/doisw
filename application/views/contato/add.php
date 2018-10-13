<?php echo form_open('contato/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
			<span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telRes" class="col-md-4 control-label">TelRes</label>
		<div class="col-md-8">
			<input type="text" name="telRes" value="<?php echo $this->input->post('telRes'); ?>" class="form-control" id="telRes" />
			<span class="text-danger"><?php echo form_error('telRes');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telCom" class="col-md-4 control-label">TelCom</label>
		<div class="col-md-8">
			<input type="text" name="telCom" value="<?php echo $this->input->post('telCom'); ?>" class="form-control" id="telCom" />
			<span class="text-danger"><?php echo form_error('telCom');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telCel" class="col-md-4 control-label">TelCel</label>
		<div class="col-md-8">
			<input type="text" name="telCel" value="<?php echo $this->input->post('telCel'); ?>" class="form-control" id="telCel" />
			<span class="text-danger"><?php echo form_error('telCel');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="operadora" class="col-md-4 control-label">Operadora</label>
		<div class="col-md-8">
			<input type="text" name="operadora" value="<?php echo $this->input->post('operadora'); ?>" class="form-control" id="operadora" />
			<span class="text-danger"><?php echo form_error('operadora');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>