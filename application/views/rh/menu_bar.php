<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav"><!-- MENU ESQUERDO SUPERIOR -->

        <li>
            <a href="<?= $this->config->base_url('index.php/home/rh') ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-mortar-board"></i> Profissional<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="<?= $this->config->base_url('index.php/profissional') ?>"><i class="fa fa-plus"></i>Cadastrar profissional</a>
                </li>
                <li>
                    <a href="<?= $this->config->base_url('index.php/profissional/pesquisar') ?>"><i class="fa fa-search"></i>Pesquisar profissional</a>
                </li>
                <li>
                    <a href="<?= $this->config->base_url('index.php/profissional/editar') ?>"><i class="fa fa-edit"></i>Editar profissional</a>
                </li>
            </ul>
        </li>

    </ul> <!-- FIM DO MENU ESQUERDO -->
</div>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
    <i class="fa fa-bars"></i>
</button>
</div>



<div class="navbar-custom-menu">

    <ul class="nav navbar-nav"><!-- COMECO DO MENU DO LADO DIREITO -->
        <li>
            <a href="<?= $this->config->base_url('index.php/login/logout') ?>">
                <i class="fa  fa-sign-out"></i>
            </a>
        </li>
    </ul> <!-- FIM DO MENU -->

</div>
</nav>
</header>