<!DOCTYPE html>
<center>
	<img src="<?= $this->config->base_url('assets/img/cantinho.jpg') ?>" />
</center>
<div class="panel-body">

	<div class="container" style="background-color: #fff">

		<div class="panel-heading">
			<h3>
				<center>
					<i class="fa fa-plus-square"></i> ENTRADA DE MEDICAMENTO/MATERIAL
				</center>
			</h3>
		</div>

		<form class="form-horizontal">
			<div class="tabbable">
				<!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Entrada de
							Medicamento</a></li>
					<li><a href="#tab2" data-toggle="tab">Entrada de Material</a></li>
				</ul>
				<div class="tab-content">

					<!-- TAB1 - Entrada de Medicamento-->
					<div class="tab-pane active" id="tab1" style="padding-top: 30px">
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Nome do
								Medicamento:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="nomeMedicamento"
									placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Princípio
								Ativo:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control"
									id="nomePrincipioAtivoMedicamento" placeholder="">
							</div>
						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Código:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="codigoMedicamento"
									placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Quantidade:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control"
									id="quantidadeMedicamento" placeholder="">
							</div>

							<div class="col-sm-2">
								<select class="form-control" id="unidadeNumeroMedicamento">
									<option>--unidade--</option>
									<option>Caixas</option>
									<option>Pacotes</option>
								</select>
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Forma:</label>
							<div class="col-sm-4">
								<select class="form-control" id="formaMedicamento">
									<option>--Selecione a forma do medicamento--</option>
									<option></option>

									<option>--FORMAS SÓLIDAS--</option>
									<option>Comprimido</option>
									<option>Cápsula</option>
									<option>Pos</option>
									<option>Drágeas</option>
									<option>Pastlhas</option>
									<option>Óvulos</option>
									<option>Supositórios</option>
									<option>Grânulos</option>
									<option>Implante</option>
									<option></option>

									<option>--FORMAS PASTOSAS--</option>
									<option>Pomadas</option>
									<option>Cremes</option>
									<option>Pastas</option>
									<option>Cataplasmas</option>
									<option>Ceratos</option>
									<option></option>

									<option>--FORMAS LÍQUIDAS--</option>
									<option>Emulsão</option>
									<option>Elixires</option>
									<option>Soluções</option>
									<option>Tinturas</option>
									<option>Chá ou Infusão</option>
									<option>Xarope</option>
									<option></option>

									<option>--FORMA GASOSA--</option>
									<option>Vaporização</option>
									<option>Aerossol</option>
									<option></option>

									<option>--FORMAS ESPECIAIS--</option>
									<option>Ampola</option>
									<option>Colírios</option>
									<option>Spray</option>
									<option></option>

								</select>
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Concentração:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control"
									id="cencentracaoMedicamento" placeholder="">
							</div>

							<div class="col-sm-2">
								<select class="form-control" id="unidadeConcentracaoMedicamento">
									<option>--unidade--</option>
									<option>mg</option>
									<option>ml</option>
								</select>
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Tarja:</label>
							<div class="col-sm-2">
								<select class="form-control" id="tarja">
									<option>--Selecione a traja--</option>
									<option>Sem traja</option>
									<option>Amarela</option>
									<option>Vermelha sem retenÃ§Ã£o da receita</option>
									<option>Vermelha com retenÃ§Ã£o da receita</option>
									<option>Preta</option>
								</select>
							</div>
							
							<label for="inputUser" class="col-sm-2 control-label">Data de
								validade:</label>
							<div class="col-sm-2">
								<input type="date" class="form-control"
									id="dataValidadeMedicamento" placeholder="">
							</div>
							
							<label for="inputUser" class="col-sm-2 control-label">Lote:</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="loteMedicamento"
									placeholder="">
							</div>
							
							
							
						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
								
							<label for="inputUser" class="col-sm-2 control-label">Nota
								Fiscal:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control"
									id="notaFiscalMedicamento" placeholder="">
							</div>
							
							<label for="inputUser" class="col-sm-2 control-label">Valor(R$):</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="valorMedicamento"
									placeholder="">
							</div>
								
						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<br> <label for="inputUser" class="col-sm-2 control-label">Procedência:</label>

							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMedicamento">Comprado
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Origem&nbspda&nbspcompra:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="origemCompramedicamento"
									placeholder="">
							</div>
							

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label"></label>
							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMedicamento">Doação
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Origem&nbspda&nbspdoação:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="origemDoacaoMedicamento"
									placeholder="">
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label"></label>
							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMedicamento">SUS
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Data&nbspde&nbsprecepção:</label>
							<div class="col-sm-6">
								<input type="date" class="form-control"
									id="dataRecebimentoSusMedicamento" placeholder="">
							</div>

						</div>
						<!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<br> <label for="inputUser" class="col-sm-2 control-label">Observações:</label>
							<div class="col-sm-10">
								<textarea rows="5" class="form-control"
									id="observacoesEntradaMedicamento" maxlength="1000"></textarea>
							</div>
						</div>
						<!-- form-group -->

					</div>
					<!-- end-tab1 (Entrada de Medicamento) -->

					<!-- TAB2  Entrada de Material-->
					<div class="tab-pane" id="tab2" style="padding-top: 30px">
						<div class="col-sm-12 form-group">

							<label for="inputUser" class="col-sm-2 control-label">Nome do
								Material:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="nomeMaterial"
									placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Quantidade:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="quantidadeMaterial"
									placeholder="">
							</div>
					    </div>
					    <!-- form-group -->
							
						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Código:</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" id="codigoMaterial"
								placeholder="">
							</div>
							
							<label for="inputUser" class="col-sm-2 control-label">Data de
								validade:</label>
							<div class="col-sm-2">
							<input type="date" class="form-control"id="dataValidadeMaterial" placeholder="">
							</div>

							<label for="inputUser" class="col-sm-2 control-label">Lote:</label>
							<div class="col-sm-2">
							<input type="text" class="form-control" id="loteMaterial"
									placeholder="">
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label">Nota Fiscal:</label>
							<div class="col-sm-4">
							<input type="text" class="form-control" id="notaFiscalMaterial"
								placeholder="">
							</div>
							
							<label for="inputUser" class="col-sm-2 control-label">Valor(R$):</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="valorMaterial"
									placeholder="">
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<br> <label for="inputUser" class="col-sm-2 control-label">Procedência:</label>

							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMaterial">Comprado
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Origem&nbspda&nbspcompra:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="origemCompraMaterial"
									placeholder="">
							</div>
							

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label"></label>
							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMaterial">Doação
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Origem&nbspda&nbspdoação:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="origemDoacaoMaterial"
									placeholder="">
							</div>

						</div>
						<!-- form-group -->

						<div class="col-sm-12 form-group">
							<label for="inputUser" class="col-sm-2 control-label"></label>
							<div class="col-sm-1 radio">
								<label> <input type="radio" name="optionsRadios" class=""
									id="procedenciaMaterial">SUS
								</label>
							</div>

							<label for="inputUser" class="col-sm-3 control-label">Data&nbspde&nbsprecepção:</label>
							<div class="col-sm-6">
								<input type="date" class="form-control"
									id="dataRecebimentoSusMaterial" placeholder="">
							</div>

						</div>
						<!-- form-group -->
						
						<div class="col-sm-12 form-group">
							<br> <label for="inputUser" class="col-sm-2 control-label">Observações:</label>
							<div class="col-sm-10"><textarea rows="5" class="form-control"
								id="observacoesEntradaMaterial" maxlength="1000"></textarea>
							</div>
					    </div>
						<!-- form-group -->

						</div>
						<!-- end-tab2 (Entrada de Material) -->

					</div>
					<!-- End-Tabbable -->

				</div>
				<!--tab content -->

				<div class="col-sm-12 form-group">
					<center>
						<button type="submit" class="btn btn-primary">Salvar</button>
					</center>
				</div>
				<!-- form-group -->
		
		</form>
		<!-- End-form class -->
	</div>
	<!-- End-container -->

	</html>