
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('Produto')?>">Produto</a>
    </li>
    <li class="breadcrumb-item active">Adicionar</li>
</ol>
<div class="col-12">
    <!--Estrutura do menu -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="dados-tab" data-toggle="tab" href="#dados" role="tab" aria-controls="dados" aria-selected="false">Dados Gerais</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="estoque-tab" data-toggle="tab" href="#estoque" role="tab" aria-controls="estoque" aria-selected="false">Estoque</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="fornecedor-tab" data-toggle="tab" href="#fornecedor" role="tab" aria-controls="fornecedor" aria-selected="false">Fornecedor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tributacao-tab" data-toggle="tab" href="#tributacao" role="tab" aria-controls="tributacao" aria-selected="false">Tributação</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" id="arqImg-tab" data-toggle="tab" href="#arqImg" role="tab" aria-controls="arqImg" aria-selected="false">Arquivos e imagens</a>
        </li>
    </ul>
    <div class="card">
        <div class="container-fluid">
            <div class="card-body">
                <div>
                    <h3>Imagem salva com sucesso</h3>
                    <?php foreach($dadosArquivo as $key => $value):
                    if($value): ?>
                    <strong><?=$key?></strong>: <?=$value?>
                    <?php endif; endforeach;?>
                    <hr/>
                    <a href="<?php echo base_url()?>produto" class="btn btn" role="button" aria-pressed="true">Salvar formulario</a>
                    <a href="<?=$urlDownload?>" class="btn btn-info btn-xs">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>