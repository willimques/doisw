<?php echo form_open('pedidoitem/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="dataVenda" class="col-md-4 control-label">DataVenda</label>
		<div class="col-md-8">
			<input type="text" name="dataVenda" value="<?php echo $this->input->post('dataVenda'); ?>" class="form-control" id="dataVenda" />
		</div>
	</div>
	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label">Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="precoUnitario" class="col-md-4 control-label">PrecoUnitario</label>
		<div class="col-md-8">
			<input type="text" name="precoUnitario" value="<?php echo $this->input->post('precoUnitario'); ?>" class="form-control" id="precoUnitario" />
		</div>
	</div>
	<div class="form-group">
		<label for="precoTotal" class="col-md-4 control-label">PrecoTotal</label>
		<div class="col-md-8">
			<input type="text" name="precoTotal" value="<?php echo $this->input->post('precoTotal'); ?>" class="form-control" id="precoTotal" />
		</div>
	</div>
	<div class="form-group">
		<label for="descontoUnitario" class="col-md-4 control-label">DescontoUnitario</label>
		<div class="col-md-8">
			<input type="text" name="descontoUnitario" value="<?php echo $this->input->post('descontoUnitario'); ?>" class="form-control" id="descontoUnitario" />
		</div>
	</div>
	<div class="form-group">
		<label for="descontoTotal" class="col-md-4 control-label">DescontoTotal</label>
		<div class="col-md-8">
			<input type="text" name="descontoTotal" value="<?php echo $this->input->post('descontoTotal'); ?>" class="form-control" id="descontoTotal" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>