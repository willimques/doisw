
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Unidade</li>
</ol>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Unidade  </h3>
                </div>
                <div class="pull-right">
                    <a href="<?php echo site_url('unidade/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
                </div>
            </div> 
        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 
            <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                     </thead>
                    <?php foreach($unidades as $U){ ?>
                    <tr>
                        <td><?php echo $U['descricao']; ?></td>
                        <td>
                            <a href="<?php echo site_url('unidade/edit/'.$U['IDUnidades']); ?>" class="btn btn-info btn-xs">Edit</a> 
                            <a href="<?php echo site_url('unidade/remove/'.$U['IDUnidades']); ?>" class="btn btn-danger btn-xs">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>             
             </table>        
        </div>
    </div>
</div>