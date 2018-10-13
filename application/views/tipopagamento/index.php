<div class="pull-right">
	<a href="<?php echo site_url('tipopagamento/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDTipoPagamento</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tipopagamentos as $T){ ?>
    <tr>
		<td><?php echo $T['IDTipoPagamento']; ?></td>
		<td><?php echo $T['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('tipopagamento/edit/'.$T['IDTipoPagamento']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tipopagamento/remove/'.$T['IDTipoPagamento']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
