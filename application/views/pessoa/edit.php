<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('pessoa')?>">Pessoa</a>
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

            <?php echo form_open('pessoa/edit/'.$pessoa['IDPessoa'],array("class"=>"form-horizontal")); ?>

            <div class="row">                             
                <div class="">
                    <input type="text" name="codigo" value="<?php echo ($this->input->post('IDPessoaTipo') ? $this->input->post('IDPessoaTipo') : $pessoa['IDPessoaTipo']); ?>" class="form-control" id="edIDPessoaTipo" hidden />
                    <span class="text-danger"><?php echo form_error('IDPessoaTipo');?></span>
                </div>
                
                <div class="form-group col-md-2">
                    <label for="codigo" class="control-label">Codigo</label>
                    <div class="">
                        <input type="text" name="codigo" value="<?php echo ($this->input->post('codigo') ? $this->input->post('codigo') : $pessoa['codigo']); ?>" class="form-control" id="codigo" readonly />
                        <span class="text-danger"><?php echo form_error('codigo');?></span>
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="nome" class="control-label">Nome</label>
                    <div class="">
                        <input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $pessoa['nome']); ?>" class="form-control" id="nome" />
                        <span class="text-danger"><?php echo form_error('nome');?></span>
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label for="nomeFantasia" class="control-label">NomeFantasia</label>
                    <div class="">
                        <input type="text" name="nomeFantasia" value="<?php echo ($this->input->post('nomeFantasia') ? $this->input->post('nomeFantasia') : $pessoa['nomeFantasia']); ?>" class="form-control" id="nomeFantasia" />
                        <span class="text-danger"><?php echo form_error('nomeFantasia');?></span>
                    </div>
                </div>
            </div>              

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="situacao" class="control-label">Situacao</label>
                    <div class="">
                        <input type="text" name="situacao" value="<?php echo ($this->input->post('situacao') ? $this->input->post('situacao') : $pessoa['situacao']); ?>" class="form-control" id="situacao" />
                        <span class="text-danger"><?php echo form_error('situacao');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3 campoPF">
                    <label for="cpf" class="control-label">Cpf</label>
                    <div class="">
                        <input type="text" name="cpf" value="<?php echo ($this->input->post('cpf') ? $this->input->post('cpf') : $pessoafisica['cpf']); ?>" class="form-control cpf" id="cpf" />
                         <span class="text-danger"><?php echo form_error('cpf');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3 campoPF">
                    <label for="rg" class="control-label">Rg</label>
                    <div class="">
                        <input type="text" name="rg" value="<?php echo ($this->input->post('rg') ? $this->input->post('rg') : $pessoafisica['rg']); ?>" class="form-control" id="rg" />
                         <span class="text-danger"><?php echo form_error('rg');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3 campoPF">
                    <label for="dataNascimento" class="control-label">DataNascimento</label>
                    <div class="">
                        <input type="text" name="dataNascimento" value="<?php echo ($this->input->post('dataNascimento') ? $this->input->post('dataNascimento') : $pessoafisica['dataNascimento']); ?>" class="form-control" id="dataNascimento" />
                    </div>
                     <span class="text-danger"><?php echo form_error('dataNascimento');?></span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-3 campoPJ">
                    <label for="cnpj" class="control-label">Cnpj</label>
                    <div class="">
                        <input type="text" name="cnpj" value="<?php echo ($this->input->post('cnpj') ? $this->input->post('cnpj') : $pessoajuridica['cnpj']); ?>" class="form-control cnpj" id="cnpj" />
                          <span class="text-danger"><?php echo form_error('cnpj');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3 campoPJ">
                    <label for="inscricaoEstadual" class="control-label">InscricaoEstadual</label>
                    <div class="">
                        <input type="text" name="inscricaoEstadual" value="<?php echo ($this->input->post('inscricaoEstadual') ? $this->input->post('inscricaoEstadual') : $pessoajuridica['inscricaoEstadual']); ?>" class="form-control" id="inscricaoEstadual" />
                          <span class="text-danger"><?php echo form_error('inscricaoEstadual');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3 campoPJ ">
                    <label for="InscricaoMunicial" class="control-label">InscricaoMunicial</label>
                    <div class="">
                        <input type="text" name="InscricaoMunicial" value="<?php echo ($this->input->post('InscricaoMunicial') ? $this->input->post('InscricaoMunicial') : $pessoajuridica['InscricaoMunicial']); ?>" class="form-control" id="InscricaoMunicial" />
                           <span class="text-danger"><?php echo form_error('InscricaoMunicial');?></span>
                        
                    </div>
                </div>
                <div class="form-group col-md-3 campoPJ">
                    <label for="dataAbertura" class="control-label">DataAbertura</label>
                    <div class="">
                        <input type="text" name="dataAbertura" value="<?php echo ($this->input->post('dataAbertura') ? $this->input->post('dataAbertura') : $pessoajuridica['dataAbertura']); ?>" class="form-control" id="dataAbertura" />
                    </div>
                    <span class="text-danger"><?php echo form_error('dataAbertura');?></span>
                </div>
            </div>
            <p>Dados de Contato</p>
            <div class="row">
                <div class="form-group col-md-4 ">
                    <label for="email" class="control-label">Email</label>
                    <div class="">
                        <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $contato['email']); ?>" class="form-control" id="email" />
                        <span class="text-danger"><?php echo form_error('email');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="telRes" class="control-label">TelRes</label>
                    <div class="">
                        <input type="text" name="telRes" value="<?php echo ($this->input->post('telRes') ? $this->input->post('telRes') : $contato['telRes']); ?>" class="form-control phone_with_ddd" id="telRes" />
                        <span class="text-danger"><?php echo form_error('telRes');?></span>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="telCel" class="control-label">TelCel</label>
                    <div class="">
                        <input type="text" name="telCel" value="<?php echo ($this->input->post('telCel') ? $this->input->post('telCel') : $contato['telCel']); ?>" class="form-control cel_with_ddd" id="telCel" />
                        <span class="text-danger"><?php echo form_error('telCel');?></span>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="operadora" class="control-label">Operadora</label>
                    <div class="">
                        <input type="text" name="operadora" value="<?php echo ($this->input->post('operadora') ? $this->input->post('operadora') : $contato['operadora']); ?>" class="form-control" id="operadora" />
                        <span class="text-danger"><?php echo form_error('operadora');?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="cep" class="control-label">Cep</label>
                    <div class="">
                        <input type="text" name="cep" value="<?php echo ($this->input->post('cep') ? $this->input->post('cep') : $endereco['cep']); ?>" class="form-control cep" id="cep" />
                        <span class="text-danger"><?php echo form_error('cep');?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="endereco" class="control-label">Endereco</label>
                    <div class="">
                        <input type="text" name="endereco" value="<?php echo ($this->input->post('endereco') ? $this->input->post('endereco') : $endereco['endereco']); ?>" class="form-control" id="endereco" />
                        <span class="text-danger"><?php echo form_error('endereco');?></span>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="numero" class="control-label">Numero</label>
                    <div class="">
                        <input type="text" name="numero" value="<?php echo ($this->input->post('numero') ? $this->input->post('numero') : $endereco['numero']); ?>" class="form-control" id="numero" />
                        <span class="text-danger"><?php echo form_error('numero');?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="complemento" class="control-label">Complemento</label>
                    <div class="">
                        <input type="text" name="complemento" value="<?php echo ($this->input->post('complemento') ? $this->input->post('complemento') : $endereco['complemento']); ?>" class="form-control" id="complemento" />
                        <span class="text-danger"><?php echo form_error('complemento');?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="bairro" class="control-label">Bairro</label>
                    <div class="">
                        <input type="text" name="bairro" value="<?php echo ($this->input->post('bairro') ? $this->input->post('bairro') : $endereco['bairro']); ?>" class="form-control" id="bairro" />
                        <span class="text-danger"><?php echo form_error('bairro');?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="cidade" class="control-label">Cidade</label>
                    <div class="">
                        <input type="text" name="cidade" value="<?php echo ($this->input->post('cidade') ? $this->input->post('cidade') : $endereco['cidade']); ?>" class="form-control" id="cidade" />
                        <span class="text-danger"><?php echo form_error('cidade');?></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="uf" class="control-label">Uf</label>
                    <div class="">
                        <input type="text" name="estado" value="<?php echo ($this->input->post('estado') ? $this->input->post('estado') : $endereco['uf']); ?>" class="form-control" id="estado" />
                        <span class="text-danger"><?php echo form_error('estado');?></span>
                    </div>
                </div>
            </div>
            <div class="row float-right mr-2">
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-success ">Salvar</button>
                        <a href="<?php echo site_url('pessoa/remove/'.$pessoa['IDPessoa']); ?>" class="btn btn-danger btn-xs">Excluir</a>
                    </div>
                   
                </div>
                 <?php echo form_close(); ?>
            </div>

           
        </div>
    </div>
</div>