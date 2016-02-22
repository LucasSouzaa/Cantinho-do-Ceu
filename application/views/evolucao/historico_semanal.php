<link rel="stylesheet" href="<?= $this->config->base_url('assets/plugins/iCheck/square/blue.css') ?>">

<center><img src="<?= $this->config->base_url('assets/img/cantinho.jpg') ?>" /></center>
<div class="panel-body">

	<div class="container" style="background-color:#fff">

		<div class="panel-heading">
			<h3>
				<center>
					<i class="fa fa-newspaper-o"></i> HISTORICO SEMANAL 
				</center>
			</h3>
		</div>

		<div class="col-sm-12 form-group">
			<label for="inputUser" class="col-sm-2 control-label">Nome do Paciente:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" id="nomePaciente" placeholder="">
			</div>
		</div>

		<div class="col-sm-12 form-group">
			<label for="inputUser" class="col-sm-2 control-label">Data:</label>
			
			<div class="col-sm-3">
				<input type="date" class="form-control" id="nomePaciente" placeholder="">
			</div>

		</div>


		<div class="col-sm-12 form-group">
			
			<div class="col-sm-5">
				<label>
					<input type="checkbox" name="optionsRadios" class="" > Receberá visita na instituição.
				</label>

			</div>

		</div>

		<div class="col-sm-12 form-group">

			<div class="col-sm-5">
				<label>
					<input type="checkbox" name="optionsRadios" class=""> Voltará para casa no fim de semana.
				</label>
			</div>

		</div>

		<div class="col-sm-12 form-group">

			<div class="col-sm-5">
				<label>
					<input type="checkbox" name="optionsRadios" class=""> Passeio com voluntário.
				</label>
			</div>

		</div>

		<div class="col-sm-12 form-group">
			<label for="inputUser" class="col-sm-2 control-label">Observações:</label>	
			<div class="col-sm-8">
				<textarea rows="10" class="form-control" maxlength="1000"></textarea>	
			</div>

		</div>
		
		<div class="col-sm-12 form-group">
			<div class="col-sm-4"> </div>

			<div class="col-sm-2"><br /><br />
				<input type="submit" class="btn btn-primary" value="Salvar"/><br /><br /> 
				
			</div>
		</div><!-- form-group -->
	</div>

    <!-- iCheck -->
    <script src="<?= $this->config->base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>