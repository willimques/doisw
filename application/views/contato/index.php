<div class="pull-right">
	<a href="<?php echo site_url('contato/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDContato</th>
		<th>IDPessoa</th>
		<th>Nome</th>
		<th>Email</th>
		<th>TelRes</th>
		<th>TelCel</th>
		<th>Operadora</th>
		<th>Actions</th>
    </tr>
	<?php foreach($contatos as $C){ ?>
    <tr>
		<td><?php echo $C['IDContato']; ?></td>
		<td><?php echo $C['IDPessoa']; ?></td>
		<td><?php echo $C['nome']; ?></td>
		<td><?php echo $C['email']; ?></td>
		<td><?php echo $C['telRes']; ?></td>
		<td><?php echo $C['telCel']; ?></td>
		<td><?php echo $C['operadora']; ?></td>
		<td>
            <a href="<?php echo site_url('contato/edit/'.$C['IDContato']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('contato/remove/'.$C['IDContato']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
