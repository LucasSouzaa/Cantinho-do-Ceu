<center><img src="<?= $this->config->base_url('assets/img/cantinho.jpg') ?>" /></center>
<div class="panel-body">

	<div class="container" style="background-color:#fff">

		<div class="panel-heading">
			<h3>
				<center>
					<i class="fa fa-search"></i> PESQUISAR PROFISSIONAL 
				</center>
			</h3>
		</div>

		<center><h5> (Escolha um ou mais campos abaixo para realizar a busca)</h5></center><br />
					
		<div class="row">
		<div class="col-sm-1"></div>
			<div class="col-sm-2 form-group">
				<label for="inputUser" class="control-label">Nome:</label>
					<input type="text" class="form-control" id="nomePaciente" placeholder="">
			</div> <!-- form-group -->										

			<div class="col-sm-4 form-group">
					<label for="inputUser" class="col-sm-1">Status</label>
					
					<select class="form-control col-sm-4" id="inputRaca">
							<option>Selecione...</option>
							<option>Ativo</option>
							<option>Inativo</option>
							<option>Geral (ativo e inativo)</option>
					</select>
			</div> <!-- form-group -->
			</br/>	
			<button class="btn btn-primary col-sm-1">Pesquisar</button>

		</div>

		<div class="row">
			<table class="table">
				<thead>
					<th>Nome</th>
					<th>RG</th>
					<th>Cargo</th>
					<th></th>
				</thead>
				<tbody>
					<td>João da Silva</td>
					<td>123.123.123-2</td>
					<td>Recursos Humanos</td>
					<td>
						<a href="cadastroProfissional.php"><i class="fa fa-eye" data-toggle="tooltip" title="Ver Cadastro"></i></a>
					</td>
				</tbody>
			</table>
		</div>
		
	</div>
</div>