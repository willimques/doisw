<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Revendedor</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Revendedor</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('revendedor/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
                        <th>Codigo</th>                                         
                        <th>Revendedor</th>                                         
                        <th>Limite</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach($revendedores as $R){ ?>
                <tbody>
                    <tr>                                                  
                        <td><?php echo $R['codigo']; ?></td>                               
                        <td><?php echo $R['nome']; ?></td>                               
                        <td><?php echo $R['limite']; ?></td>
                        <td>
                            <a href="<?php echo site_url('revendedor/edit/'.$R['IDRevendedor']); ?>" class="btn btn-info btn-xs">Editar</a> 
                            <a href="<?php echo site_url('revendedor/remove/'.$R['IDRevendedor']); ?>" class="btn btn-danger btn-xs">Remover</a>
                            <a href="<?php echo site_url('pessoa/profile/'.$R['IDRevendedor']); ?>" class="btn btn-info btn-xs">Visualizar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>