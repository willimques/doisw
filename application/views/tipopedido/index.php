<div class="pull-right">
	<a href="<?php echo site_url('tipopedido/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDTipoPedido</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipopedidos as $T){ ?>
    <tr>
		<td><?php echo $T['IDTipoPedido']; ?></td>
		<td><?php echo $T['Descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('tipopedido/edit/'.$T['IDTipoPedido']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tipopedido/remove/'.$T['IDTipoPedido']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
