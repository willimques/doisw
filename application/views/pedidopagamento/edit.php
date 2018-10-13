<?php echo form_open('pedidopagamento/edit/'.$pedidopagamento['IDPedido'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tipoPagamento" class="col-md-4 control-label">Tipopagamento</label>
		<div class="col-md-8">
			<select name="tipoPagamento" class="form-control">
				<option value="">select tipopagamento</option>
				<?php 
				foreach($all_tipopagamentos as $tipopagamento)
				{
					$selected = ($tipopagamento['IDTipoPagamento'] == $pedidopagamento['tipoPagamento']) ? ' selected="selected"' : "";

					echo '<option value="'.$tipopagamento['IDTipoPagamento'].'" '.$selected.'>'.$tipopagamento['IDTipoPagamento'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="dataPagamento" class="col-md-4 control-label">DataPagamento</label>
		<div class="col-md-8">
			<input type="text" name="dataPagamento" value="<?php echo ($this->input->post('dataPagamento') ? $this->input->post('dataPagamento') : $pedidopagamento['dataPagamento']); ?>" class="form-control" id="dataPagamento" />
		</div>
	</div>
	<div class="form-group">
		<label for="valorParcela" class="col-md-4 control-label">ValorParcela</label>
		<div class="col-md-8">
			<input type="text" name="valorParcela" value="<?php echo ($this->input->post('valorParcela') ? $this->input->post('valorParcela') : $pedidopagamento['valorParcela']); ?>" class="form-control" id="valorParcela" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>