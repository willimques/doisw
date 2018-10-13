<div class="pull-right">
	<a href="<?php echo site_url('situacaopedido/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDSituacao</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($situacaopedidos as $s){ ?>
    <tr>
		<td><?php echo $s['IDSituacao']; ?></td>
		<td><?php echo $s['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('situacaopedido/edit/'.$s['IDSituacao']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('situacaopedido/remove/'.$s['IDSituacao']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
