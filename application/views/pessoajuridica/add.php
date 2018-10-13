<?php echo form_open('pessoajuridica/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cnpj" class="col-md-4 control-label">Cnpj</label>
		<div class="col-md-8">
			<input type="text" name="cnpj" value="<?php echo $this->input->post('cnpj'); ?>" class="form-control" id="cnpj" />
		</div>
	</div>
	<div class="form-group">
		<label for="inscricaoEstadual" class="col-md-4 control-label">InscricaoEstadual</label>
		<div class="col-md-8">
			<input type="text" name="inscricaoEstadual" value="<?php echo $this->input->post('inscricaoEstadual'); ?>" class="form-control" id="inscricaoEstadual" />
		</div>
	</div>
	<div class="form-group">
		<label for="InscricaoMunicial" class="col-md-4 control-label">InscricaoMunicial</label>
		<div class="col-md-8">
			<input type="text" name="InscricaoMunicial" value="<?php echo $this->input->post('InscricaoMunicial'); ?>" class="form-control" id="InscricaoMunicial" />
		</div>
	</div>
	<div class="form-group">
		<label for="dataAbertura" class="col-md-4 control-label">DataAbertura</label>
		<div class="col-md-8">
			<input type="text" name="dataAbertura" value="<?php echo $this->input->post('dataAbertura'); ?>" class="form-control" id="dataAbertura" />
		</div>
	</div>
	<div class="form-group">
		<label for="tblPessoaJuridicacol" class="col-md-4 control-label">TblPessoaJuridicacol</label>
		<div class="col-md-8">
			<input type="text" name="tblPessoaJuridicacol" value="<?php echo $this->input->post('tblPessoaJuridicacol'); ?>" class="form-control" id="tblPessoaJuridicacol" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>