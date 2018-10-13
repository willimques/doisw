<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url('')?>">2WSistemas</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href=" <?php echo base_url('')?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Cadastro">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Cadastros</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="<?php echo base_url('cliente')?>">Clientes</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('revendedor')?>">Revendedores</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('fornecedor')?>">Fornecedores</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('empresaria')?>">Empresárias</a>
                    </li>

                </ul>            
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Estoque">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Estoque</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti2">
                    <li>
                        <a href="<?php echo base_url('produto')?>">Produto</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('categoria')?>">Categoria</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('estoque')?>">Estoque Principal</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('estoque_consignado')?>">Estoque consignado</a>
                    </li>

                </ul>            
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti3" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Vendas</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti3">
                    <li>
                        <a href="#">Vendas</a>
                    </li>
                    <li>
                        <a href="#">Fechamento de Vendas</a>
                    </li>
                </ul>            
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti4" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Compras</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti4">
                    <li>
                        <a href="#">Compras</a>
                    </li>
                    <li>
                        <a href="#">Fechamento de compras</a>
                    </li>
                </ul>            
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Relatorios">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti5" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Relatórios</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti5">
                    <li>
                        <a href="#">Financeiro</a>
                    </li>
                    <li>
                        <a href="#">Vendas</a>
                    </li>
                    <li>
                        <a href="#">Compras</a>
                    </li>
                    <li>
                        <a href="#">Produtos</a>
                    </li>
                    <li>
                        <a href="#">Estoque principal</a>
                    </li>
                    <li>
                        <a href="#">Estoque consignado</a>
                    </li>

                </ul>            
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Configurações">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti6" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Configurações</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti6">
                    <li>
                        <a href="#">Usuários</a>
                    </li>
                    <li>
                        <a href="#">Backup</a>
                    </li>
                </ul>            
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Chamados</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Procurar...">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>



