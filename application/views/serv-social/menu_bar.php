<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav"><!-- MENU ESQUERDO SUPERIOR -->

        <li>
            <a href="<?= $this->config->base_url('index.php/home/servico_social') ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Paciente<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?= $this->config->base_url('index.php/paciente') ?>"><i class="fa fa-user-plus"></i>Solicitar vaga</a></li>
                <li><a href="<?= $this->config->base_url('index.php/paciente/pesquisar') ?>"><i class="fa fa-search"> </i> Pesquisar paciente</a></li>
                <li><a href="#"><i class="fa fa-list-alt"> </i> Lista de espera</a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Evolução<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="<?= $this->config->base_url('index.php/evolucao') ?>"><i class="fa fa-newspaper-o"></i>Historico semanal</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="<?= $this->config->base_url('index.php/home/servico_social') ?>">
                <i class="fa fa-calendar"></i> Agenda
            </a>
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