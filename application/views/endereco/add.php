<?php echo form_open('endereco/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cep" class="col-md-4 control-label">Cep</label>
		<div class="col-md-8">
			<input type="text" name="cep" value="<?php echo $this->input->post('cep'); ?>" class="form-control" id="cep" />
			<span class="text-danger"><?php echo form_error('cep');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="endereco" class="col-md-4 control-label">Endereco</label>
		<div class="col-md-8">
			<input type="text" name="endereco" value="<?php echo $this->input->post('endereco'); ?>" class="form-control" id="endereco" />
			<span class="text-danger"><?php echo form_error('endereco');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="numero" class="col-md-4 control-label">Numero</label>
		<div class="col-md-8">
			<input type="text" name="numero" value="<?php echo $this->input->post('numero'); ?>" class="form-control" id="numero" />
			<span class="text-danger"><?php echo form_error('numero');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="complemento" class="col-md-4 control-label">Complemento</label>
		<div class="col-md-8">
			<input type="text" name="complemento" value="<?php echo $this->input->post('complemento'); ?>" class="form-control" id="complemento" />
			<span class="text-danger"><?php echo form_error('complemento');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="bairro" class="col-md-4 control-label">Bairro</label>
		<div class="col-md-8">
			<input type="text" name="bairro" value="<?php echo $this->input->post('bairro'); ?>" class="form-control" id="bairro" />
			<span class="text-danger"><?php echo form_error('bairro');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cidade" class="col-md-4 control-label">Cidade</label>
		<div class="col-md-8">
			<input type="text" name="cidade" value="<?php echo $this->input->post('cidade'); ?>" class="form-control" id="cidade" />
			<span class="text-danger"><?php echo form_error('cidade');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="uf" class="col-md-4 control-label">Uf</label>
		<div class="col-md-8">
			<input type="text" name="uf" value="<?php echo $this->input->post('uf'); ?>" class="form-control" id="uf" />
			<span class="text-danger"><?php echo form_error('uf');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="tblEnderecocol" class="col-md-4 control-label">TblEnderecocol</label>
		<div class="col-md-8">
			<input type="text" name="tblEnderecocol" value="<?php echo $this->input->post('tblEnderecocol'); ?>" class="form-control" id="tblEnderecocol" />
			<span class="text-danger"><?php echo form_error('tblEnderecocol');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>