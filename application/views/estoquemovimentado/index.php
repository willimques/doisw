<div class="pull-right">
	<a href="<?php echo site_url('estoquemovimentado/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDEstoqueMovimentado</th>
		<th>IDProduto</th>
		<th>Data</th>
		<th>TipoMovimento</th>
		<th>Quantidade</th>
		<th>Actions</th>
    </tr>
	<?php foreach($estoquemovimentado as $E){ ?>
    <tr>
		<td><?php echo $E['IDEstoqueMovimentado']; ?></td>
		<td><?php echo $E['IDProduto']; ?></td>
		<td><?php echo $E['Data']; ?></td>
		<td><?php echo $E['tipoMovimento']; ?></td>
		<td><?php echo $E['quantidade']; ?></td>
		<td>
            <a href="<?php echo site_url('estoquemovimentado/edit/'.$E['IDEstoqueMovimentado']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('estoquemovimentado/remove/'.$E['IDEstoqueMovimentado']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
