<div class="pull-right">
	<a href="<?php echo site_url('filial/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDFilial</th>
		<th>IDPessoaFilial</th>
		<th>Actions</th>
    </tr>
	<?php foreach($filiais as $F){ ?>
    <tr>
		<td><?php echo $F['IDFilial']; ?></td>
		<td><?php echo $F['IDPessoaFilial']; ?></td>
		<td>
            <a href="<?php echo site_url('filial/edit/'.$F['IDFilial']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('filial/remove/'.$F['IDFilial']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
