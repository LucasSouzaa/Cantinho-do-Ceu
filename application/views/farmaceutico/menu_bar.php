<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav"><!-- MENU ESQUERDO SUPERIOR -->

        <li>
            <a href="<?= $this->config->base_url('index.php/home/farmaceutico') ?>">
                <i class="fa fa-home"></i> Home
            </a>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-medkit"></i> Farmácia<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="<?= $this->config->base_url('index.php/farmacia/entrada') ?>"><i class="fa fa-plus-square"></i>Entrada de medicamento/material</a>
                </li>
                <li>
                    <a href="<?= $this->config->base_url('index.php/farmacia/saida') ?>"><i class="fa fa-plus-square"></i>Saída de medicamento/material</a>
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