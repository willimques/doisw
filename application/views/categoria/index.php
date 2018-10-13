
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Categoria</li>
</ol>


<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Categorias</h3>
                </div>

                <div class="col-md-4">
                    <a href="<?php echo site_url('categoria/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
                <?php foreach($categorias as $C){ ?>
                <tr>            
                    <td><?php echo $C['descricao']; ?></td>
                    <td>
                        <a href="<?php echo site_url('categoria/edit/'.$C['IDCategoria']); ?>" class="btn btn-info btn-xs">Editar</a> 
                        <a href="<?php echo site_url('categoria/remove/'.$C['IDCategoria']); ?>" class="btn btn-danger btn-xs">Remover</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
