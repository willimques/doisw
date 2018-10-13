<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item active">Marca</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Marca</h3>
                </div>

                <div class="col-md-4">
                    <a href="<?php echo site_url('marca/add'); ?>" class="btn btn-success float-right mr-3">Adicionar</a> 
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
		   <th>Descrição</th>
		   <th>Ações</th>
        </tr>
	</thead>
	<?php foreach($marcas as $M){ ?>
    <tr>
		<td><?php echo $M['Descricao']; ?></td>
		<td>
            <a href="<?php echo site_url('marca/edit/'.$M['IDMarcas']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('marca/remove/'.$M['IDMarcas']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
	</table>
   </div>
  </div>
</div>

