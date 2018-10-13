<div class="pull-right">
	<a href="<?php echo site_url('preco/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPreco</th>
		<th>Descricao</th>
		<th>Comissao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($precos as $P){ ?>
    <tr>
		<td><?php echo $P['IDPreco']; ?></td>
		<td><?php echo $P['descricao']; ?></td>
		<td><?php echo $P['comissao']; ?></td>
		<td>
            <a href="<?php echo site_url('preco/edit/'.$P['IDPreco']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('preco/remove/'.$P['IDPreco']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
