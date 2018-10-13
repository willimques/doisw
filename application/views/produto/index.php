
<div class="card">
 <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Produto</h3>
                </div>
                <div class="col-md-4">
                    <a href="<?php echo site_url('produto/add'); ?>" class="btn btn-success float-right mr-4">Adicionar</a> 
                </div>
            </div> 
        </div>
    </div> 
    
<div class="container-fluid">
        <div class="card-body">         
            <table id="dataTable" class="table table-striped table-bordered" >
                <thead>
                    <tr>         
		               <th>Nome</th>
		               <th>Código</th>
		               <th>Preço Custo</th>
		               <th>Preço Venda</th>
		               <th>Situacão</th>
		               <th>Descricão</th>
		               <th>Cod. Barras</th>
		               <th>Foto</th>
		               <th>Data Cadastro</th>
		               <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produtos as $P){ ?>
                    <tr>
		                <td><?php echo $P['nome_produto']; ?></td>
		                <td><?php echo $P['codigo']; ?></td>
		                <td><?php echo $P['precoCusto']; ?></td>
		                <td><?php echo $P['precoVenda']; ?></td>
		                <td><?php echo $P['situacao']; ?></td>
		                <td><?php echo $P['descricao']; ?></td>
		                <td><?php echo $P['codBarras']; ?></td>
		                <td><?php echo $P['arquivo']; ?></td>
		                <td><?php echo $P['dataCadastro']; ?></td>
                        <td>                       
                        <a href="<?php echo site_url('produto/edit/'.$P['IDProduto']); ?>" class="fas fa-edit"></a> 
                        <a href="<?php echo site_url('produto/remove/'.$P['IDProduto']); ?>"  class="far fa-trash-alt"></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
