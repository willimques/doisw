<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('estoque')?>">Estoque</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Estoque</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('estoque/add',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
                <label for="IDProduto" class="col-md-4 control-label"><span class="text-danger">*</span>Produto</label>
                <div class="col-md-8">
                    <select name="IDProduto" class="form-control">
                        <option value="">Selecione Produto</option>
                        <?php 
                        foreach($all_produtos as $produto)
                        {
                            $selected = ($produto['IDProduto'] == $this->input->post('IDProduto')) ? ' selected="selected"' : "";

                            echo '<option value="'.$produto['IDProduto'].'" '.$selected.'>'.$produto['descricao'].'</option>';
                        } 
                        ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('IDProduto');?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="IDFilial" class="col-md-4 control-label"><span class="text-danger">*</span>Filial</label>
                <div class="col-md-8">
                    <select name="IDFilial" class="form-control">
                        <option value="">Selecione Filial</option>
                        <?php 
                        foreach($all_filiais as $filial)
                        {
                            $selected = ($filial['IDFilial'] == $this->input->post('IDFilial')) ? ' selected="selected"' : "";

                            echo '<option value="'.$filial['IDFilial'].'" '.$selected.'>'.$filial['IDFilial'].'</option>';
                        } 
                        ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('IDFilial');?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="quantidade" class="col-md-4 control-label">Quantidade</label>
                <div class="col-md-8">
                    <input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
                    <span class="text-danger"><?php echo form_error('quantidade');?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="movimento" class="col-md-4 control-label">Movimento</label>
                <div class="col-md-8">
                    <input type="text" name="movimento" value="<?php echo $this->input->post('movimento'); ?>" class="form-control" id="movimento" />
                </div>
            </div>
            <div class="form-group">
                <label for="estMinimo" class="col-md-4 control-label">Estoque Mínimo</label>
                <div class="col-md-8">
                    <input type="text" name="estMinimo" value="<?php echo $this->input->post('estMinimo'); ?>" class="form-control" id="estMinimo" />
                    <span class="text-danger"><?php echo form_error('estMinimo');?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="estMaximo" class="col-md-4 control-label">Estoque Máximo</label>
                <div class="col-md-8">
                    <input type="text" name="estMaximo" value="<?php echo $this->input->post('estMaximo'); ?>" class="form-control" id="estMaximo" />
                    <span class="text-danger"><?php echo form_error('estMaximo');?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>
