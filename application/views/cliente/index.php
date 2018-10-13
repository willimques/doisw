<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Cliente</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Cliente</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('cliente/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
                    </div>
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                    <tr>               
                        <th>Código</th>
                        <th>Cliente</th>
                        <th>Limite</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $C){ ?>
                    <tr>                      
                        <td><?php echo $C['codigo']; ?></td>
                        <td><?php echo $C['nome']; ?></td>
                        <td><?php echo $C['limite']; ?></td>
                        <td>
                            <a href="<?php echo site_url('cliente/edit/'.$C['IDCliente']); ?>" class="btn btn-info btn-xs">Editar</a> 
                            <a href="<?php echo site_url('cliente/remove/'.$C['IDCliente']); ?>" class="btn btn-danger btn-xs">Remover</a>
                            <a href="<?php echo site_url('pessoa/profile/'.$C['IDCliente']); ?>" class="fas fa-info-circle "></a> 
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>  