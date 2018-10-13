<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Empresaria</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Empresaria</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('empresaria/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
                        <th>Código</th>                       
                        <th>Empresaria</th>                       
                        <th>Limite</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                
                <?php foreach($empresarias as $E){ ?>
                <tr>                                
                    <td><?php echo $E['codigo']; ?></td>               
                    <td><?php echo $E['nome']; ?></td>               
                    <td><?php echo $E['limite']; ?></td>
                    <td>
                        <a href="<?php echo site_url('empresaria/edit/'.$E['IDEmpresaria']); ?>" class="btn btn-info btn-xs">Editar</a> 
                        <a href="<?php echo site_url('empresaria/remove/'.$E['IDEmpresaria']); ?>" class="btn btn-danger btn-xs">Remover</a>
                        <a href="<?php echo site_url('pessoa/profile/'.$E['IDEmpresaria']); ?>" class="btn btn-info btn-xs">Visualizar</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

