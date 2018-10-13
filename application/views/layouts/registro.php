  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Sua conta</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nome" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
                    <label for="nome">Nome</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="sobrenome" class="form-control" placeholder="Sobrenome" required="required">
                    <label for="sobrenome">Sobrenome</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="required">
                    <label for="inputPassword">Senha</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirme senha" required="required">
                    <label for="confirmPassword">Confirme sua senha</label>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-primary btn-block"href="<?php echo base_url('home/login')?>">Registro</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3"href="<?php echo base_url('home/login')?>">Login</a>
            <a class="d-block small"href="<?php echo base_url('home/recuperarSenha')?>">Esqueceu sua Senha?</a>
          </div>
        </div>
      </div>
    </div>
