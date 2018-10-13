
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Fechamento</li>
</ol>


<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Fechamento</h3>
                </div>

                <div class="col-md-4">
<!--                    <a href="<?php echo site_url('fechamento/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> -->
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">  
            <div class="pull-right">

            </div>

            <table id="dataTable" class="table table-striped table-bordered">
                <thead>
                    <tr>                     
                        <th>#</th>
                        <th>IDPessoa</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach($fechamentos as $C){ ?>
                <tr>            
                    <td><?php echo $C['IDFechamento']; ?></td>
                    <td><?php echo $C['nome']; ?></td>
                    <td><?php echo $C['valor_total']; ?></td>
                    <td>
<!--
                        <a href="<?php echo site_url('fechamento/edit/'.$C['IDFechamento']); ?>" class="btn btn-info btn-xs">Editar</a> 
                        <a href="<?php echo site_url('fechamento/remove/'.$C['IDFechamento']); ?>" class="btn btn-danger btn-xs">Remover</a>
-->
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
