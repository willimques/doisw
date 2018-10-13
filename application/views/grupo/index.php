<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Cadastrar Grupo</h3>
                </div>

                <div class="col-md-4">
                    <a href="<?php echo site_url('grupo/add'); ?>" class="btn btn-success float-right mr-4">Adicionar</a> 
                </div>
            </div> 

        </div>
    </div>  
<div class="container-fluid">
        <div class="card-body">         

            <table id="dataTable" class="table table-striped table-bordered" >
                <thead>
                    <tr>                     
					   <th>Descrição</th>
		               <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($grupos as $G){ ?>
                    <tr>
                   
		                <td><?php echo $G['descricao']; ?></td>
                        <td>        
                        <a href="<?php echo site_url('grupo/edit/'.$G['IDGrupo']); ?>" class="btn btn-info btn-xs">Edit</a> 
                        <a href="<?php echo site_url('grupo/remove/'.$G['IDGrupo']); ?>" class="btn btn-danger btn-xs">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
 </div>
