<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('prazopagamento')?>">Prazo Pagamento</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Prazo Pagamento</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('prazopagamento/add',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="descricao" class="col-md-4 control-label">Descricao</label>
                <div class="col-md-8">
                    <input type="text" name="descricao" value="<?php echo $this->input->post('descricao'); ?>" class="form-control" id="descricao" />
                </div>
                <label for="periodicidade" class="col-md-4 control-label">Periodicidade</label>
                <div class="col-md-8">
                    <input type="text" name="periodicidade" value="<?php echo $this->input->post('periodicidade'); ?>" class="form-control" id="periodicidade" />
                </div>
                <label for="parcela" class="col-md-4 control-label">Parcela</label>
                <div class="col-md-8">
                    <input type="text" name="parcela" value="<?php echo $this->input->post('parcela'); ?>" class="form-control" id="parcela" />
                </div>
                <label for="initdias" class="col-md-4 control-label">Prazo para 1º Parcela </label>
                <div class="col-md-8">
                    <input type="text" name="initdias" value="<?php echo $this->input->post('initdias'); ?>" class="form-control" id="initdias" />
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
</div>
