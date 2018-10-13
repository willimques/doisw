<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Cadastro</h3>
                </div>

                <div class="col-md-4">
                    <a href="<?php echo site_url('pessoa/add'); ?>" class="btn btn-success float-right mr-4">Adicionar</a> 
                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">         

            <table id="dataTable" class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Codigo</th>
                        <th>Tipo Pessoa</th>                       
                        <th>Nome</th>
                        <th>NomeFantasia</th>
                        <th>Data Cadastro</th>
                        <th>Situacao</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pessoas as $P){ ?>
                    <tr>
                        <td><?php echo $P['IDPessoa']; ?></td>
                        <td><?php echo $P['codigo']; ?></td>
                        <td><?php echo $P['descricao']; ?></td>                      
                        <td><?php echo $P['nome']; ?></td>
                        <td><?php echo $P['nomeFantasia']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime ($P['data_cadastro'])); ?></td>
                        <td><?php echo $P['situacao']; ?></td>
                        <td>
                     
                        <a href="<?php echo site_url('pessoa/profile/'.$P['IDPessoa']); ?>"  class="fas fa-info-circle fa-2x"></a> 

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


