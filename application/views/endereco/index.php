<div class="pull-right">
	<a href="<?php echo site_url('endereco/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDEndereco</th>
		<th>IDPessoa</th>
		<th>Cep</th>
		<th>Endereco</th>
		<th>Numero</th>
		<th>Complemento</th>
		<th>Bairro</th>
		<th>Cidade</th>
		<th>Uf</th>
		<th>TblEnderecocol</th>
		<th>Actions</th>
    </tr>
	<?php foreach($enderecos as $E){ ?>
    <tr>
		<td><?php echo $E['IDEndereco']; ?></td>
		<td><?php echo $E['IDPessoa']; ?></td>
		<td><?php echo $E['cep']; ?></td>
		<td><?php echo $E['endereco']; ?></td>
		<td><?php echo $E['numero']; ?></td>
		<td><?php echo $E['complemento']; ?></td>
		<td><?php echo $E['bairro']; ?></td>
		<td><?php echo $E['cidade']; ?></td>
		<td><?php echo $E['uf']; ?></td>
		<td><?php echo $E['tblEnderecocol']; ?></td>
		<td>
            <a href="<?php echo site_url('endereco/edit/'.$E['IDEndereco']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('endereco/remove/'.$E['IDEndereco']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
