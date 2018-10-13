<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Estoque</li>
</ol>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Estoque Principal</h3>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
<!--                        <a href="<?php echo site_url('estoque/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> -->
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
                        <th>IDProduto</th>                        
                        <th>Quantidade</th>                        
                        <th>Valor de Custo</th>                        
                        <th>Valor de Tabela</th>                        
                        <th>Total Custo </th>                        
                        <th>Total Tabela </th>                        
                        <th>Estoque Minimo</th>
                        <th>Estoque Maximo</th>
<!--                        <th>Ações</th>-->
                    </tr>
                </thead>
                <?php foreach($estoques as $E){ ?>
                <tr>
                    
                    <td><?php echo $E['nome_produto']; ?></td>              
                    <td><?php echo intval($E['quantidade']); ?></td>                   
                    <td><?php echo 'R$ '.number_format($E['precoCusto'], 2, ',', '.'); ?></td>              
                    <td><?php echo 'R$ '.number_format($E['precoVenda'], 2, ',', '.'); ?></td>              
                    <td><?php echo 'R$ '.number_format($E['quantidade']*$E['precoCusto'], 2, ',', '.'); ?></td>              
                    <td><?php echo 'R$ '.number_format($E['quantidade']*$E['precoVenda'], 2, ',', '.'); ?></td>              
                    <td><?php echo $E['estMinimo']; ?></td>
                    <td><?php echo $E['estMaximo']; ?></td>
<!--
                    <td>
                        <a href="<?php echo site_url('estoque/edit/'.$E['IDEstoque']); ?>" class="btn btn-info btn-xs">Edit</a> 
                        <a href="<?php echo site_url('estoque/remove/'.$E['IDEstoque']); ?>" class="btn btn-danger btn-xs">Delete</a>
                    </td>
-->
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
