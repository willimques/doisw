<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('categoria')?>">Tabela de Preço</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Tabelas de Preço</h3>
                </div>

                <div class="col-md-4">
                    
            <div class="pull-right">
                <a href="<?php echo site_url('precoproduto/add'); ?>" class="btn btn-success">Adicionar Tabela</a> 
            </div>

                </div>
            </div> 
        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">  


            <table id="dataTable"class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>IDPreco</th>
                    <th>IDProduto</th>
                    <th>Valor</th>
                    <th>Actions</th>
                </tr>
                    </thead>
                <?php foreach($precoprodutos as $P){ ?>
                <tr>
                    <td><?php echo $P['IDPreco']; ?></td>
                    <td><?php echo $P['IDProduto']; ?></td>
                    <td><?php echo $P['valor']; ?></td>
                    <td>
                        <a href="<?php echo site_url('precoproduto/edit/'.$P['IDPreco']); ?>" class="btn btn-info btn-xs">Edit</a> 
                        <a href="<?php echo site_url('precoproduto/remove/'.$P['IDPreco']); ?>" class="btn btn-danger btn-xs">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
