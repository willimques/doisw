<?php echo form_open('estoquemovimentado/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="IDProduto" class="col-md-4 control-label">IDProduto</label>
		<div class="col-md-8">
			<input type="text" name="IDProduto" value="<?php echo $this->input->post('IDProduto'); ?>" class="form-control" id="IDProduto" />
		</div>
	</div>
	<div class="form-group">
		<label for="Data" class="col-md-4 control-label">Data</label>
		<div class="col-md-8">
			<input type="text" name="Data" value="<?php echo $this->input->post('Data'); ?>" class="form-control" id="Data" />
		</div>
	</div>
	<div class="form-group">
		<label for="tipoMovimento" class="col-md-4 control-label">TipoMovimento</label>
		<div class="col-md-8">
			<input type="text" name="tipoMovimento" value="<?php echo $this->input->post('tipoMovimento'); ?>" class="form-control" id="tipoMovimento" />
		</div>
	</div>
	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label">Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>