<div class="pull-right">
	<a href="<?php echo site_url('prazopagamento/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Descricao</th>
		<th>Acão</th>
    </tr>
	<?php foreach($prazopagamentos as $T){ ?>
    <tr>
		<td><?php echo $T['IDPrazoPag']; ?></td>
		<td><?php echo $T['descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('prazopagamento/edit/'.$T['IDPrazoPag']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('prazopagamento/remove/'.$T['IDPrazoPag']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
