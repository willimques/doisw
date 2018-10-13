<div class="pull-right">
	<a href="<?php echo site_url('pessoatipo/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPessoaTipo</th>
		<th>Descricao</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pessoatipos as $P){ ?>
    <tr>
		<td><?php echo $P['IDPessoaTipo']; ?></td>
		<td><?php echo $P['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('pessoatipo/edit/'.$P['IDPessoaTipo']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pessoatipo/remove/'.$P['IDPessoaTipo']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
