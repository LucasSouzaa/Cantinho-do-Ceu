<center><img src="<?= $this->config->base_url('assets/img/cantinho.jpg') ?>" /></center>
<div class="panel-body">

	<div class="container" style="background-color:#fff">

		<div class="panel-heading">
			<h3>
				<center>
					<i class="fa fa-edit"></i> EDITAR PROFISSIONAL 
				</center>
			</h3>
		</div>

		<form class="form-horizontal">
            <div class="tabbable"> <!-- Only required for left/right tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Informações Pessoais</a></li>
		            <li><a href="#tab2" data-toggle="tab">Informações Trabalho</a></li>
                <li><a href="#tab3" data-toggle="tab">Contatos</a></li>
                <li><a href="#tab4" data-toggle="tab">Documentos</a></li>
                <li><a href="#tab5" data-toggle="tab">Familia</a></li>
              </ul>
              <div class="tab-content">

                <!-- TAB1 - Informações Pessoais--> 
                <div class="tab-pane active" id="tab1" style="padding-top:30px">
                  <div class="col-sm-12 form-group">
                    	<center> <img src="download.jpg"/>
                     	<p><small>300x200   PNG, JPG</small></p>

			<div class="col-sm-4">
			</div>

			<div class="col-sm-4">
                      		<input type="file" class="form-control" id="fotoProfissional" placeholder="">
                    	</div>

			<div class="col-sm-4">
			</div>
	
			</center>
                  </div>

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nomeProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->
		
		<div class="col-sm-12 form-group">
		    <label for="inputUser" class="col-sm-2 control-label">Data Nascimento:</label>
                    <div class="col-sm-3">
                      <input type="date" class="form-control" id="dataNascProfissional" placeholder="">
                    </div>
		

                    <label for="inputUser" class="col-sm-2 control-label">Estado Civil:</label>
                    <div class="col-sm-3">
                      <select class="form-control" id="input">
                          <option>Solteiro(a)</option>
                          <option>Casado(a)</option>
                          <option>Divorciado(a)</option>
                          <option>Viúvo(a)</option>
                        </select>
                      </div>
		</div> <!-- form-group -->

		<div class="col-sm-12 form-group">
              <label for="inputUser" class="col-sm-2 control-label">Naturalidade:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="naturalidade" placeholder="">
              </div>                            

              <label for="inputUser" class="col-sm-2 control-label">Nacionalidade:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="nacionalidade" placeholder="">
              </div>                            
            </div> <!-- form-group -->


                  <div class="col-sm-12 form-group">

			<label for="inputUser" class="col-sm-2 control-label">Escolaridade:</label>
                        <div class="col-sm-3">
                          <select class="form-control" id="escolaridade">
                            <option>Ensino Fundamental </option>
                            <option>Ensino Fundamental Incompleto</option>
                            <option>Ensino Médio </option>
                            <option>Ensino Médio Incompleto</option>
                            <option>Ensino Superior</option>
			    <option>Ensino Superior Incompleto</option>
                          </select>
                        </div>
                    </div>

		                      
                </div>

		<!-- TAB2  Informações Trabalho--> 
                <div class="tab-pane" id="tab2" style="padding-top:30px">

			<div class="col-sm-12 form-group">
		    		<label for="inputUser" class="col-sm-2 control-label">Data Contratação:</label>
                    		<div class="col-sm-3">
                      			<input type="date" class="form-control" id="dataContProfissional" placeholder="">
                    		</div>

				<div class="col-sm-3">
					<input type="checkbox" class="" id="inativo" placeholder="" name="inativo">
					Inativo
                    		</div>

			</div> <!-- form-group -->

			<div class="col-sm-12 form-group">
		    		<label for="inputUser" class="col-sm-2 control-label">Identificação:</label>
                    		<div class="col-sm-4">
                      			<input type="text" class="form-control" id="idProfissional" placeholder="">
                    		</div>

			</div> <!-- form-group -->
	
			<div class="col-sm-12 form-group">
        <label class="col-sm-offset-1 col-sm-1 control-label">21/07/2013 </label>
        <label for="inputUser" class="col-sm-1 control-label">Cargo/Profissão:</label>
        <span class="col-sm-2 control-label">Médico Ortopedista</span>
        

				<label for="inputUser" class="col-sm-1 control-label">Salário:</label>
        <span class="col-sm-2 control-label">R$ 3000,00</span>

        <div id="alterarCargo" class="col-sm-2 btn btn-info">Alterar Cargo </div>
        
			</div> <!-- form-group -->

      <div id ="newCargo" class="col-sm-12 form-group">

        <label for="inputUser" class="col-sm-2 control-label">Cargo/Profissão:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="cargoProfissional" placeholder="">
        </div>

        <label for="inputUser" class="col-sm-1 control-label">Salário:</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" id="salarioProfissional" placeholder="">
        </div>
        
      </div> <!-- form-group -->

			<div class="col-sm-12 form-group">
		    		<label for="inputUser" class="col-sm-2 control-label">Horário</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="horarioProfissional" placeholder="">
                    		</div>

			</div> <!-- form-group -->


		</div>

                <!-- TAB3 -Contatos--> 
                <div class="tab-pane" id="tab3" style="padding-top:30px">

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Logradouro:</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="ruaProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Número:</label>
                    <div class="col-sm-1">
                      <input type="text" class="form-control" id="numeroProfissional" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">Bairro:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="bairroProfissional" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Complemento:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="complementoProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputMunicipio" class="col-sm-2 control-label">Cidade:</label>
                    <div class="col-sm-2">
                      <select class="form-control" id="inputMunicipio">
                        <option>Araçatuba</option>
                        <option>Batatais</option>
                        <option>Catanduva</option>
                        <option>Cravinhos</option>
                        <option>Franca</option>
                        <option>Jaboticabal</option>
                        <option>Jales</option>
                        <option>Ribeirão Preto</option>
                        <option>São José do Rio Preto</option>
                        <option>Sertãozinho</option>
                        <option>Taquaritinga</option>
                      </select>
                    </div>

                    <label for="inputMunicipio" class="col-sm-1 control-label">Estado:</label>
                    <div class="col-sm-2">
                      <select class="form-control" id="inputMunicipio">
                        <option>SP</option>
                      </select>
                    </div>

                    <label for="inputUser" class="col-sm-1 control-label">CEP:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="cepPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Telefone:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="fonePaciente" placeholder="">
                    </div>

                    <label for="inputUser" class="col-sm-2 control-label">Celular:</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="celPaciente" placeholder="">
                    </div>
                  </div> <!-- form-group -->
                </div>

                <!-- TAB4 -Documentos--> 
                <div class="tab-pane" id="tab4" style="padding-top:30px">
                  
			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">RG:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="rgProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="rgArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">CPF:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="cpfProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cpfArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Carteira de Trabalho:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="reservistaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="reservistaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Titulo Eleitor:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="tituloProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="tituloArqProfissional" placeholder="">
                    		</div>
			
			</div> <!-- form-group -->
		
			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">COREN/Conselho:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="corenProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="corenArqProfissional" placeholder="">
                    		</div>
                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Inscrição PIS:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="pisProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="pisArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Certidão Nascimento:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="cerNascProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cerNascArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Certidão Casamento:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="cerCasaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="cerCasaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Reservista:</label>
                    		<div class="col-sm-3">
                      			<input type="text" class="form-control" id="reservistaProfissional" placeholder="">
                    		</div>

				<label for="inputUser" class="col-sm-1 control-label">Arquivo:</label>
				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="reservistaArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Carteira Vacinação:</label>

				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="carVacProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->

			<div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-2 control-label">Exame Admissional:</label>
				<div class="col-sm-4">
          <input type="file" class="form-control" id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->

      <div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-2 control-label">Exames Anuais:</label>
        <div id="inserirExame" class="col-sm-offset-6 col-sm-2 btn btn-info">Inserir Exame </div>
        
      </div> <!-- form-group -->

      <div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-offset-1 col-sm-2 control-label">21/10/2014</label>
        <span class="col-sm-1 control-label">exame.pdf</span>
        <div id="inserirExame" class="col-sm-2 btn btn-info">Visualizar Exame </div>
      </div> <!-- form-group -->      

      <div id="novoExame" class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-offset-1 col-sm-2 control-label">Data: </label>
        <div class="col-sm-3">
          <input type="text" class="form-control" id="reservistaProfissional" placeholder="">
        </div>
        <div class="col-sm-4">          
          <input type="file" class="form-control " id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->

      <div class="col-sm-12 form-group">
        <label for="inputUser" class="col-sm-2 control-label">Exame Demissional:</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" id="exameArqProfissional" placeholder="">
        </div>
      </div> <!-- form-group -->

			<div class="col-sm-12 form-group">

                    		<label for="inputUser" class="col-sm-2 control-label">Comprovante Residência:</label>

				<div class="col-sm-4">
                      			<input type="file" class="form-control" id="comResiArqProfissional" placeholder="">
                    		</div>

                  	</div> <!-- form-group -->
 
                </div>

                <!-- TAB5 -Familia--> 
                <div class="tab-pane" id="tab5" style="padding-top:30px">

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="nomePareProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

		  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Data Nascimento:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="dtaPareProfissional" placeholder="">
                    </div>

                        <label for="inputUser" class="col-sm-2 control-label">Grau de Parentesco:</label>
                        <div class="col-sm-2">
                          <select class="form-control" id="parentesco">
                            <option>Conjuguê</option>
                            <option>Filho(a)</option>
                            <option>Mãe</option>
                            <option>Pai</option>
                            <option>Irmão(a)</option>
                          </select>
                        </div>

                      <label for="inputUser" class="col-sm-1 control-label">Telefone:</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="fonePareProfissional" placeholder="">
                      </div>
                    </div> <!-- form-group -->

		<div class="col-sm-12 form-group">
                    <div class="col-sm-9">
                    </div>

		    <div class="col-sm-1">
			<input type="button" value="Adicionar" onclick="">
                    </div>


		    <div class="col-sm-1">
			<input type="button" value="Excluir" onclick="">
                    </div>

                  </div> <!-- form-group -->


                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="nomePareProfissional" placeholder="">
                    </div>
                  </div> <!-- form-group -->

		  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Data Nascimento:</label>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="dtaPareProfissional" placeholder="">
                    </div>

                        <label for="inputUser" class="col-sm-2 control-label">Grau de Parentesco:</label>
                        <div class="col-sm-2">
                          <select class="form-control" id="parentesco">
                            <option>Filho(a)</option>
                            <option>Conjuguê</option>
                            <option>Mãe</option>
                            <option>Pai</option>
                            <option>Irmão(a)</option>
                          </select>
                        </div>

                      <label for="inputUser" class="col-sm-1 control-label">Telefone:</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="fonePareProfissional" placeholder="">
                      </div>
                    </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Cert. Nascimento:</label>
                    <div class="col-sm-7">
                      	<input type="file" class="form-control" id="certNascArqParen" placeholder="">
                    </div>*Menores de 14 anos
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Cart. Vacinação:</label>
                    <div class="col-sm-7">
                      	<input type="file" class="form-control" id="vacinaArqParen" placeholder="">
                    </div>*Menores de 6 anos
                  </div> <!-- form-group -->

                  <div class="col-sm-12 form-group">
                    <label for="inputUser" class="col-sm-2 control-label">Declar. Escolar:</label>
                    <div class="col-sm-7">
                      	<input type="file" class="form-control" id="escolaArqParen" placeholder="">
                    </div>*Maiores de 6 anos
                  </div> <!-- form-group -->

		<div class="col-sm-12 form-group">
                    <div class="col-sm-9">
                    </div>

		    <div class="col-sm-1">
			<input type="button" value="Adicionar" onclick="">
                    </div>


		    <div class="col-sm-1">
			<input type="button" value="Excluir" onclick="">
                    </div>

                  </div> <!-- form-group -->

                </div>

                </div>

              </div> <!--tab content -->

              <div class="col-sm-12 form-group">
                   <center> <button type="submit" class="btn btn-primary">Salvar</button> </center>
            </div>  <!-- form-group --> 
            </div>

            

            <br><br>
          </form>