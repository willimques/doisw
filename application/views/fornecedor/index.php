
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Fornecedor</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Fornecedor</h3>
                </div>

                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="<?php echo site_url('fornecedor/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
                        <th>Fornecedor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach($fornecedores as $F){ ?>
                <tbody>                <tr>                  
                    <td><?php echo $F['codigo']; ?></td>
                    <td><?php echo $F['nome']; ?></td>
                    <td>
                        <!--                        <a href="</?php echo site_url('fornecedor/edit/'.$F['IDFornecedor']); ?>" class="btn btn-info btn-xs">Edit</a> -->
                        <a href="<?php echo site_url('fornecedor/remove/'.$F['IDFornecedor']); ?>" class="btn btn-danger btn-xs">Remover</a>
                        <a href="<?php echo site_url('pessoa/profile/'.$F['IDFornecedor']); ?>" class="btn btn-info btn-xs">Visualizar</a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
