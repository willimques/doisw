<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('/')?>">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('up/add')?>">Upload</a>
    </li>
    <li class="breadcrumb-item active"></li>
</ol>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="row">
                <div class="col-md-8">
                    <h3>Upload</h3>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card-body">
            <div>
                <div class="error">
                    <?php if(isset($error)):?>
                    <div>
                        <?=$error?>
                    </div>
                    <?php endif; ?>
                </div>
                <!--url com a rota (controler/função do controler)-->
                
                <form class="form-control-group" name="upload" action="<?=base_url('up/add')?>" method="POST" enctype="multipart/form-data">
                    <div class="row-sm">
                        <label>Selecione um arquivo (jpg, png, gif)</label>
                            <input type="file" class="form-control" name="arquivo" lang id=arquivo />
                    </div><br>
                    <div>
                        <input type="submit" name="subir" value="Salvar imagem" />
                    </div>
                </form>
                <table id="dataTable" class="table table-striped table-bordered">
                    <?php foreach($up as $U){ ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $U['nome']; ?>
                            </td>
                            <td>
                                <!--<a href="</?php echo site_url('fornecedor/edit/'.$F['IDFornecedor']); ?>" class="btn btn-info btn-xs">Edit</a> -->
                                <img class="img-responsive avatar-view" src="<?php echo base_url('/'.$U['nome'])?>" style="width: 100px; height: 100px;" alt="Avatar" title="imagem">
                                <a href="<?php echo site_url('up/remove/'.$U['IDImagem']); ?>" class="btn btn-danger btn-xs">Remover</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>   
            </div>
        </div>
    </div>
</div>