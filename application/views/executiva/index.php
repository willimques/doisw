<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Executiva</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Executivas</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('executiva/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
                        <th>Executiva</th>
                        <th>Limite</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach($executivas as $E){ ?>
                <tbody>
                    <tr>                     
                        <td><?php echo $E['codigo']; ?></td>
                        <td><?php echo $E['nome']; ?></td>
                        <td><?php echo $E['limite']; ?></td>
                        <td>
                            <a href="<?php echo site_url('executiva/edit/'.$E['IDExecutiva']); ?>" class="btn btn-info btn-xs">Editar</a> 
                            <a href="<?php echo site_url('executiva/remove/'.$E['IDExecutiva']); ?>" class="btn btn-danger btn-xs">Remover</a>
                            <a href="<?php echo site_url('pessoa/profile/'.$E['IDExecutiva']); ?>" class="btn btn-info btn-xs">Visualizar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

