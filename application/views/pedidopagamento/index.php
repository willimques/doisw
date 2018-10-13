<div class="pull-right">
	<a href="<?php echo site_url('pedidopagamento/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPedido</th>
		<th>TipoPagamento</th>
		<th>DataPagamento</th>
		<th>ValorParcela</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pedidopagamentos as $P){ ?>
    <tr>
		<td><?php echo $P['IDPedido']; ?></td>
		<td><?php echo $P['tipoPagamento']; ?></td>
		<td><?php echo $P['dataPagamento']; ?></td>
		<td><?php echo $P['valorParcela']; ?></td>
		<td>
            <a href="<?php echo site_url('pedidopagamento/edit/'.$P['IDPedido']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pedidopagamento/remove/'.$P['IDPedido']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
