<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('executiva')?>">Executiva</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Executiva</h3>
                </div>

                <div class="col-md-4">

                </div>
            </div> 

        </div>
    </div>       
    <div class="container-fluid">
        <div class="card-body"> 

            <?php echo form_open('executiva/add',array("class"=>"form-horizontal")); ?>
			<label for="tabelaPreco" class="col-md-4 control-label">Nome</label>
               <div class="col-md-8">
                    <select name="IDExecutiva" class="form-control">
                        <option value="">Selecione o Cadastro</option>
                        <?php 
                        foreach($all_pessoas as $pessoa)
                        {
                            $selected = ($pessoa['IDPessoa'] == $this->input->post('IDExecutiva')) ? ' selected="selected"' : "";

                            echo '<option value="'.$pessoa['IDPessoa'].'" '.$selected.'>'.$pessoa['nome'].'</option>';
                        } 
                        ?>
                    </select>
                   <span class="text-danger"><?php echo form_error('IDExecutiva');?></span>
                </div>
            
            <div class="form-group">
                <label for="tabelaPreco" class="col-md-4 control-label">Preço</label>
                <div class="col-md-8">
                    <select name="tabelaPreco" class="form-control">
                        <option value="">Selecione preco</option>
                        <?php 
                        foreach($all_precos as $preco)
                        {
                            $selected = ($preco['IDPreco'] == $this->input->post('tabelaPreco')) ? ' selected="selected"' : "";

                            echo '<option value="'.$preco['IDPreco'].'" '.$selected.'>'.$preco['descricao'].'</option>';
                        } 
                        ?>
                    </select>
                </div>
                <span class="text-danger"><?php echo form_error('tabelaPreco');?></span>
            </div>

            <div class="form-group">
                <label for="limite" class="col-md-4 control-label">Limite</label>
                <div class="col-md-8">
                    <input type="text" name="limite" value="<?php echo $this->input->post('limite'); ?>" class="form-control" id="limite" />
                </div>
                <span class="text-danger"><?php echo form_error('limite');?></span>
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
