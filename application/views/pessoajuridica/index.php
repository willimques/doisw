<div class="pull-right">
	<a href="<?php echo site_url('pessoajuridica/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>IDPessoaJuridica</th>
		<th>Cnpj</th>
		<th>InscricaoEstadual</th>
		<th>InscricaoMunicial</th>
		<th>DataAbertura</th>
		<th>TblPessoaJuridicacol</th>
		<th>Actions</th>
    </tr>
	<?php foreach($pessoajuridicas as $P){ ?>
    <tr>
		<td><?php echo $P['IDPessoaJuridica']; ?></td>
		<td><?php echo $P['cnpj']; ?></td>
		<td><?php echo $P['inscricaoEstadual']; ?></td>
		<td><?php echo $P['InscricaoMunicial']; ?></td>
		<td><?php echo $P['dataAbertura']; ?></td>
		<td><?php echo $P['tblPessoaJuridicacol']; ?></td>
		<td>
            <a href="<?php echo site_url('pessoajuridica/edit/'.$P['IDPessoaJuridica']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pessoajuridica/remove/'.$P['IDPessoaJuridica']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
