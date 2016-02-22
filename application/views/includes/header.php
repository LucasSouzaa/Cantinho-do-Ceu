<!DOCTYPE html>
<html>
	
	<head>

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">

		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/bootstrap.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/AdminLTE.min.css') ?>" />
		 <link rel="stylesheet" href="<?= $this->config->base_url('assets/css/skins/_all-skins.min.css') ?>" />

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<title>Cantinho do Céu</title>
	</head>

<body class="hold-transition skin-blue layout-top-nav">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        
        <nav class="navbar navbar-static-top" role="navigation">

          <div class="navbar-header">
            <a href="#" class="navbar-brand"><b>Cantinho</b> do ceu</a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav"><!-- MENU ESQUERDO SUPERIOR -->

              <li>
                <a href="<?= $this->config->base_url('index.php/home/homepage') ?>">
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i> Evolulção<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="<?= $this->config->base_url('index.php/evolucao') ?>"><i class="fa fa-newspaper-o"></i>Historico semanal</a>
                  </li>
                </ul>
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

      <!-- =============================================== -->


