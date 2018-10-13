<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('fornecedor')?>">Fornecedor</a>
    </li>
    <li class="breadcrumb-item active">Editar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Editar</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('fornecedor/edit/'.$fornecedor['IDFornecedor'],array("class"=>"form-horizontal")); ?>
            
            <div class="form-group">
                <label for="IDFornecedor" class="col-md-4 control-label">Pessoa</label>
                <div class="col-md-8">
                    <select name="IDPessoaFilial" class="form-control">
                        <option value="">select pessoa</option>
                        <?php 
                        foreach($all_pessoas as $pessoa)
                        {
                            $selected = ($pessoa['IDPessoa'] == $fornecedor['IDFornecedor']) ? ' selected="selected"' : "";

                            echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['IDPessoa'].'</option>';
                        } 
                        ?>
                    </select>
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
