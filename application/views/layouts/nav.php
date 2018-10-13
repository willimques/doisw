<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url('/')?>">2WSistemas</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Procurar" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href= "https://doiswti.tomticket.com?account=1621888P11102018115417" target="_blank" id="alertsDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span> <img type="image/png" style="width: 25px; height: 25px;" src="<?php echo base_url('assets/_img/chamado.png')?>">  </span>
            </a>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Configurações</a>           
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Sair</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('')?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
                <i class="fas fa-users"></i>
                <span>Cadastros</span></a>
            <div class="dropdown-menu" aria-labelledby="menuCadastro">                
                <a class="dropdown-item" href="<?php echo base_url('pessoa')?>">Pessoa</a>
                <a class="dropdown-item" href="<?php echo base_url('cliente')?>">Cliente</a>
                <a class="dropdown-item" href="<?php echo base_url('fornecedor')?>">Fornecedor</a>
                <a class="dropdown-item" href="<?php echo base_url('revendedor')?>">Revendedor</a>
                <a class="dropdown-item" href="<?php echo base_url('empresaria')?>">Empresaria</a>
                <a class="dropdown-item" href="<?php echo base_url('executiva')?>">Executiva</a>
            </div>

        </li> 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuEstoque" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
                <i class="fas fa-archive"></i>
                <span>Estoques</span></a>
            <div class="dropdown-menu" aria-labelledby="menuEstoque">  
                <a class="dropdown-item" href="<?php echo base_url('categoria')?>">Categoria</a>
                <a class="dropdown-item" href="<?php echo base_url('produto')?>">Produto</a>
                <a class="dropdown-item" href="<?php echo base_url('estoque')?>">Estoque Empresa</a>          
                <a class="dropdown-item" href="<?php echo base_url('estoqueconsignado')?>">Estoque Consignado</a>          
            </div>
        </li> 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuVenda" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
               <i class="fas fa-chart-bar"></i>
                <span>Vendas</span></a>
            <div class="dropdown-menu" aria-labelledby="menuVenda">  
                <a class="dropdown-item" href="<?php echo base_url('pedido')?>">Venda</a>
<!--
                <a class="dropdown-item" href="<?php echo base_url('')?>">Venda Consignada</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Tabela de Preço</a>
-->
                <a class="dropdown-item" href="<?php echo base_url('fechamento')?>">Fechamento de Venda</a>
<!--                <a class="dropdown-item" href="<?php echo base_url('')?>">Devoluções</a>            -->
            </div>
        </li> 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuFinanceiro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
            <i class="fas fa-dollar-sign"></i>
                <span>Finaceiro</span></a>
            <div class="dropdown-menu" aria-labelledby="menuFinanceiro">  
                <a class="dropdown-item" href="<?php echo base_url('')?>">Contas a Pagar</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Contas a Receber</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Fluxo de Caixa</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Parâmetros Financeiros</h6>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Forma de Pagamento</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Controle de Cheques</a>            
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuRelatorios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
               <i class="fas fa-clipboard-list"></i>
                <span>Relatorios</span></a>
            <div class="dropdown-menu" aria-labelledby="menuRelatorios">  
                <a class="dropdown-item" href="<?php echo base_url('')?>">Cadastros</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Venda</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Estoque</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Financeiro</a>                  
            </div>
        </li> 

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="menuConfigurações" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">           
               <i class="fas fa-cog"></i>
                <span>Configurações</span></a>
            <div class="dropdown-menu" aria-labelledby="menuConfigurações">  
                <a class="dropdown-item" href="<?php echo base_url('')?>">Gerais</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Meu Plano</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Usuários</a>
                <a class="dropdown-item" href="<?php echo base_url('')?>">Dados da empresa</a>                  
            </div>
        </li> 
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="CRM" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="far fa-address-card"></i>
                <span>CRM</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="CRM">
                <a class="dropdown-item" href="#">Em Breve</a>
               
            </div>
        </li>
    </ul>







