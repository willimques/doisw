 <body class="bg-dark">

     <?php include "header.php"?>
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
         
            <?php echo form_open('login',array("class"=>"form-horizontal")); ?>

            <div class="form-group">
              <div class="form-label-group">
                <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" id="email" class="form-control" placeholder="Digite seu Email" required="required" autofocus="autofocus">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">                
                <input type="password" name="senha" value="<?php echo $this->input->post('senha'); ?>" id="senha" class="form-control" required="required" autofocus="autofocus">
                <label for="senha">Senha</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="lembrar">
                 Relembre minha senha 
                </label>
              </div>
            </div>
            
            <button class="btn btn-primary btn-block" type="submit">Login</button>
            
          <?php echo form_close(); ?>
          <!--<div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url('home/registro')?>">Registrar uma conta</a>
            <a class="d-block small" href="<?php echo base_url('home/recuperarSenha')?>">Esqueceu sua senha ?</a>
          </div>-->
        </div>
      </div>
    </div>
