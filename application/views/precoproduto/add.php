
<?php echo form_open('precoproduto/add',array("class"=>"form-horizontal")); ?>
<div class="form-group col-md-6">
    <label> Selecione o Produto</label>
    <div class="">
        <select name="IDPreco" id="IDPreco" class="form-control">
            <option value="">Selecione</option>
            <?php 
            foreach($all_tabelas as $tab)
            {
                $selected = ($tab['IDPreco'] == $this->input->post('IDPreco')) ? ' selected="selected"' : "";

                echo '<option value="'.$tab['IDPreco'].'" '.$selected.'>'.$tab['descricao'].'</option>';
            } 
            ?>
        </select>
    </div>
    <span class="text-danger"><?php echo form_error('IDProduto');?></span>
</div>
<div class="form-group col-md-6">
    <label> Selecione o Produto</label>
    <div class="">
        <select name="IDProduto" id="IDProduto" class="form-control">
            <option value="">Selecione</option>
            <?php 
            foreach($all_produtos as $P)
            {
                $selected = ($P['IDProduto'] == $this->input->post('IDProduto')) ? ' selected="selected"' : "";

                echo '<option value="'.$P['IDProduto'].'" '.$selected.'>'.$P['descricao'].'</option>';
            } 
            ?>
        </select>
    </div>
    <span class="text-danger"><?php echo form_error('IDProduto');?></span>
</div>
<div class="form-group col-md-9">
    <label for="valor" class="col-md-4 control-label">Valor</label>
    <div class="col-md-8">
        <input type="text" name="valor" value="<?php echo $this->input->post('valor'); ?>" class="form-control" id="valor" />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</div>

<?php echo form_close(); ?>