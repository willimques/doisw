<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('pessoa')?>">Pessoa</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Cadastrar</h3>
                </div>
                <div class="col-md-4">

                </div>
            </div> 
        </div>
    </div>    
    <?php echo form_open('pessoa/add',array("class"=>"form-horizontal")); ?>

    <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="row">
            <div class="form-group col-md-3">
                <label for="IDPessoaTipo" class="control-label">Selecione o tipo de Cadastro </label>
                <div class="">
                    <select id="TipoPessoa"name="IDPessoaTipo" class="form-control">
                        <?php 
                        foreach($all_pessoatipos as $pessoatipo)
                        {
                            $selected = ($pessoatipo['IDPessoaTipo'] == $this->input->post('IDPessoaTipo')) ? ' selected="selected"' : "";

                            echo '<option value="'.$pessoatipo['IDPessoaTipo'].'" '.$selected.'>'.$pessoatipo['descricao'].'</option>';
                        } 
                        ?>
                    </select>
                    <span class="text-danger"><?php echo form_error('IDPessoaTipo');?></span>
                </div>
            </div>    
            <div class="form-group col-md-3">
                <label for="codigo" class=" control-label">Codigo</label>
                <div class="">
                    <div class="input-group-prepend"> 
                        <input id="btncodaut"  type="text" name="codigo" value="<?php echo $this->input->post('codigo'); ?>" class="form-control" id="codigo" />                
                        <button onclick="geraaut()" class="btn btn-secondary" type="button">Gerar</button> 
                    </div>
                    <span class="text-danger"><?php echo form_error('codigo');?></span>
                </div>
            </div>
           <div class="form-group col-md-3">
                <label for="situacao" class="control-label">Situacao</label>
                <div class="">            
                    <select name="situacao" class="form-control">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>  
                        <?php echo $this->input->post('situacao'); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="nome" class=" control-label">Nome</label>
                <div>
                    <input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
                    <span class="text-danger"><?php echo form_error('nome');?></span>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="nomeFantasia" class=" control-label">Nome Fantasia</label>
                <div class="">
                    <input type="text" name="nomeFantasia" value="<?php echo $this->input->post('nomeFantasia'); ?>" class="form-control" id="nomeFantasia" />
                    <span class="text-danger"><?php echo form_error('nomeFantasia');?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="row campoPF">
            <div class="form-group col-md-4">
                <div class="form-label-group">
                    <input type="text" name="cpf" value="<?php echo $this->input->post('cpf'); ?>" class="form-control" id="cpf" placeholder="cpf" />
                    <label for="cpf">CPF</label> 
                </div>
                <span class="text-danger"><?php echo form_error('cpf');?></span>  
            </div>
            <div class="form-group  col-md-4">
                <div class="form-label-group">
                    <input type="text" name="rg" value="<?php echo $this->input->post('rg'); ?>" class="form-control" id="rg" placeholder="rg" />
                    <label for="rg">RG</label> 
                </div>
                <span class="text-danger"><?php echo form_error('rg');?></span>  
            </div>
            <div class="form-group col-md-4">
                <div class="form-label-group">
                    <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" placeholder="dataNascimento" title="dataNascimento"> 
                    <label for="data_nascimento">Data Nascimento</label> 
                </div>
                <span class="text-danger"><?php echo form_error('dataNascimento');?></span> 
            </div> 
        </div>
        <div class="row campoPJ">
            <div class="form-group col-md-4 ">
                <div class="form-label-group">
                    <input type="text" name="cnpj" value="<?php echo $this->input->post('cnpj'); ?>" class="form-control cnpj" id="cnpj" placeholder="cnpj" />
                    <label for="cnpj">CNPJ</label> 
                </div>
                <span class="text-danger"><?php echo form_error('cnpj');?></span>  
            </div>
            <div class="form-group col-md-4">
                <div class="form-label-group ">
                    <input type="text" name="inscricaoEstadual" value="<?php echo $this->input->post('inscricaoEstadual'); ?>" class="form-control" id="inscricaoEstadual" placeholder="inscrição estadual" />
                    <label for="inscricaoEstadual">Inscricao Estadual</label> 
                    <input class="ckie" type="checkbox">Isento? 
                </div>
                <span class="text-danger"><?php echo form_error('inscricaoEstadual');?></span>  
            </div>
            <div class="form-group col-md-4">
                <div class="form-label-group ">
                    <input type="text" name="InscricaoMunicial" value="<?php echo $this->input->post('InscricaoMunicial'); ?>" class="form-control" id="InscricaoMunicial" placeholder="inscrição municipal" />
                    <label for="InscricaoMunicial">Inscricao Municipal</label> 
                    <input class="ckim" type="checkbox">Isento? 
                </div>
                <span class="text-danger"><?php echo form_error('InscricaoMunicial');?></span>  
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control phone_with_ddd" name="telRes" value="<?php echo $this->input->post('telRes'); ?>" id="telRes" placeholder="telRes" title="telRes">  
                    <label for="telRes" >Telefone</label> 
                </div>
                <span class="text-danger"><?php echo form_error('telRes');?></span> 
            </div>
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control cel_with_ddd" name="telCel" value="<?php echo $this->input->post('telCel'); ?>" id="telCel" placeholder="telCel" title="telCel">  
                    <label for="telCel" >Celular</label> 
                </div>
                <span class="text-danger"><?php echo form_error('telCel');?></span> 
            </div>
            <div class="form-group col-4">
                 
                <div class="form-label-group-">     
                     
                    <select type="text" class="form-control" name="operadora" > 
                        <option value="">Selecione Operadora</option>
                        <option value="Tim">Tim</option>
                        <option value="Vivo">Vivo</option>  
                        <option value="Oi">Oi</option>  
                        <option value="Sercomtel">Sercomtel</option>  
                        <option value="Nextel">Nextel</option>  
                        <?php echo $this->input->post('operadora'); ?>                        
                    </select>
                    <label for="operadora" ></label> 
                </div>
                <span class="text-danger"><?php echo form_error('operadora');?></span> 
            </div>                   
            <div class="form-group col-6">
                <div class="form-label-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="email" title="email">  
                    <label for="email" >Email</label> 
                </div>
                <span class="text-danger"><?php echo form_error('email');?></span> 
            </div>
            <div class="form-group col-6">
                <div class="form-label-group">
                    <input type="email" class="form-control" name="re-email" id="re-email" placeholder="re-email" title="re-email">  
                    <label for="re-email">Confirma seu Email</label> 
                </div>
                <span class="text-danger"><?php echo form_error('re-email');?></span> 
            </div>
            <div class="form-group col-md-3 campoPJ">
                <div class="form-label-group">
                    <input type="date" class="form-control" name="dataAbertura" id="dataAbertura" placeholder="dataAbertura" title="dataAbertura"> 
                    <label for="data_nascimento">Data Abertura</label> 
                </div>
                <span class="text-danger"><?php echo form_error('dataAbertura');?></span> 
            </div> 
        </div>
    </div>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <div class="row mt-3">
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control cep" name="cep" id="cep" placeholder="cep" title="Cep" value="<?php echo $this->input->post('cep'); ?>">  
                    <label for="cep">Cep</label> 
                </div>
                <span class="text-danger"><?php echo form_error('cep');?></span>  
            </div>           

            <div class="form-group col-8">
                <div class="form-label-group">
                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="endereco" title="endereco">  
                    <label for="endereco">Endereço</label> 
                </div>
                <span class="text-danger"><?php echo form_error('endereco');?></span> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="numero" class="form-control" name="numero" id="numero" placeholder="numero" title="numero">  
                    <label for="numero">Numero</label> 
                </div>
                <span class="text-danger"><?php echo form_error('numero');?></span> 
            </div>                
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="complemento" title="complemento">  
                    <label for="complemento" >Complemento</label> 
                </div>
                <span class="text-danger"><?php echo form_error('complemento');?></span> 
            </div>
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control" name="bairro" id="bairro" placeholder="bairro" title="bairro">  
                    <label for="bairro" >Bairro</label> 
                </div>
                <span class="text-danger"><?php echo form_error('bairro');?></span> 
            </div>
        </div>
        <div class="row mt-3">
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="cidade" title="cidade">  
                    <label for="cidade" >Cidade</label> 
                </div>
                <span class="text-danger"><?php echo form_error('cidade');?></span> 
            </div>
            <div class="form-group col-4">
                <div class="form-label-group">
                    <input type="text" class="form-control" name="estado" id="estado" placeholder="first name" title="estado">  
                    <label for="estado" >Estado</label> 
                </div>
                <span class="text-danger"><?php echo form_error('estado');?></span> 
            </div>                               
        </div>  
    </div>
    <div class="form-group">
        <label for="comment">Observações:</label>
        <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Digite aqui suas observacões"></textarea>
        <span class="text-danger"><?php echo form_error('comment');?></span> 
    </div>
    <div class="row mt-3 float-right">
        <div class="form-group">
            <div class="">
                <a href="<?php echo base_url()?>Pessoa" class="btn btn-lg btn-secondary  float-right " role="button" aria-pressed="true">Voltar</a>
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <button type="submit" class="btn btn-lg btn-success" role="button" aria-pressed="true">Salvar</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
