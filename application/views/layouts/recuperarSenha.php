  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Recuperar sua Senha</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Esqueceu sua senha?</h4>
            <p>Digite seu email e enviaremos seu email com as instruçoes para voce recuperar sua senha.</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control" placeholder="Digite seu email" required="required" autofocus="autofocus">
                <label for="email">Digite seu email</label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="<?php echo base_url('home/login')?>">Reset senha </a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url('home/registro')?>">Registrar minha conta</a>
            <a class="d-block small" href="<?php echo base_url('home/login')?>">Login</a>
          </div>
        </div>
      </div>
    </div>
