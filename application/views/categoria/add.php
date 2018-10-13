<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
    <a href="<?php echo base_url('categoria')?>">Categoria</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Categorias</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body">  

            <?php echo form_open('categoria/add',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="descricao" class="col-md-4 control-label">Descrição</label>
                <div class="col-md-8">
                    <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
                    <span class="text-danger"><?php echo form_error('descricao');?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success float-right">Salvar</button>
                </div>
            </div>

            <?php echo form_close(); ?>


        </div>
    </div>
</div>