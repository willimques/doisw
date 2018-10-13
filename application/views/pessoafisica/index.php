<div class="pull-right">
	<a href="<?php echo site_url('pessoafisica/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPessoaFisica</th>
		<th>Cpf</th>
		<th>Rg</th>
		<th>DataNascimento</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pessoafisicas as $P){ ?>
    <tr>
		<td><?php echo $P['IDPessoaFisica']; ?></td>
		<td><?php echo $P['cpf']; ?></td>
		<td><?php echo $P['rg']; ?></td>
		<td><?php echo $P['dataNascimento']; ?></td>
		<td>
            <a href="<?php echo site_url('pessoafisica/edit/'.$P['IDPessoaFisica']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pessoafisica/remove/'.$P['IDPessoaFisica']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
