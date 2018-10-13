<div class="pull-right">
	<a href="<?php echo site_url('pedidoitem/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPedidoItens</th>
		<th>IDProduto</th>
		<th>DataVenda</th>
		<th>Quantidade</th>
		<th>PrecoUnitario</th>
		<th>PrecoTotal</th>
		<th>DescontoUnitario</th>
		<th>DescontoTotal</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pedidoitens as $P){ ?>
    <tr>
		<td><?php echo $P['IDPedidoItens']; ?></td>
		<td><?php echo $P['IDProduto']; ?></td>
		<td><?php echo $P['dataVenda']; ?></td>
		<td><?php echo $P['quantidade']; ?></td>
		<td><?php echo $P['precoUnitario']; ?></td>
		<td><?php echo $P['precoTotal']; ?></td>
		<td><?php echo $P['descontoUnitario']; ?></td>
		<td><?php echo $P['descontoTotal']; ?></td>
		<td>
            <a href="<?php echo site_url('pedidoitem/edit/'.$P['IDPedidoItens']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pedidoitem/remove/'.$P['IDPedidoItens']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
