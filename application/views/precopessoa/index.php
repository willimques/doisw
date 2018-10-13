<div class="pull-right">
	<a href="<?php echo site_url('precopessoa/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPreco</th>
		<th>IDPessoa</th>
		<th>Actions</th>
    </tr>
	<?php foreach($precopessoas as $P){ ?>
    <tr>
		<td><?php echo $P['IDPreco']; ?></td>
		<td><?php echo $P['IDPessoa']; ?></td>
		<td>
            <a href="<?php echo site_url('precopessoa/edit/'.$P['IDPreco']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('precopessoa/remove/'.$P['IDPreco']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
