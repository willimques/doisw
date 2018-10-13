<?php echo form_open('pedido/edit/'.$pedido['IDPedido'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="IDPessoa" class="col-md-4 control-label">Pessoa</label>
		<div class="col-md-8">
			<select name="IDPessoa" class="form-control">
				<option value="">select pessoa</option>
				<?php 
				foreach($all_pessoas as $pessoa)
				{
					$selected = ($pessoa['IDPessoa'] == $pedido['IDPessoa']) ? ' selected="selected"' : "";

					echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['IDPessoa'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tipoPedido" class="col-md-4 control-label">Tipopedido</label>
		<div class="col-md-8">
			<select name="tipoPedido" class="form-control">
				<option value="">select tipopedido</option>
				<?php 
				foreach($all_tipopedidos as $tipopedido)
				{
					$selected = ($tipopedido['IDTipoPedido'] == $pedido['tipoPedido']) ? ' selected="selected"' : "";

					echo '<option value="'.$tipopedido['IDTipoPedido'].'" '.$selected.'>'.$tipopedido['IDTipoPedido'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="tipoPagamento" class="col-md-4 control-label">Tipopagamento</label>
		<div class="col-md-8">
			<select name="tipoPagamento" class="form-control">
				<option value="">select tipopagamento</option>
				<?php 
				foreach($all_tipopagamentos as $tipopagamento)
				{
					$selected = ($tipopagamento['IDTipoPagamento'] == $pedido['tipoPagamento']) ? ' selected="selected"' : "";

					echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['IDTipoPagamento'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="situacaoPedido" class="col-md-4 control-label">Situacaopedido</label>
		<div class="col-md-8">
			<select name="situacaoPedido" class="form-control">
				<option value="">select situacaopedido</option>
				<?php 
				foreach($all_situacaopedidos as $situacaopedido)
				{
					$selected = ($situacaopedido['IDSituacao'] == $pedido['situacaoPedido']) ? ' selected="selected"' : "";

					echo '<option value="'.$situacaopedido['IDSituacao'].'" '.$selected.'>'.$situacaopedido['IDSituacao'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="data" class="col-md-4 control-label">Data</label>
		<div class="col-md-8">
			<input type="text" name="data" value="<?php echo ($this->input->post('data') ? $this->input->post('data') : $pedido['data']); ?>" class="form-control" id="data" />
		</div>
	</div>
	<div class="form-group">
		<label for="comissao" class="col-md-4 control-label">Comissao</label>
		<div class="col-md-8">
			<input type="text" name="comissao" value="<?php echo ($this->input->post('comissao') ? $this->input->post('comissao') : $pedido['comissao']); ?>" class="form-control" id="comissao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>