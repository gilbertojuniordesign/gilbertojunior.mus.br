<?php include 'template-parts/mail.php'; ?>

<section id="contato" data-aos="fade" class="container">			
	<div class="row">
		<div class="col">
			<header>
				<h2 class="text-center h2-section">Contato</h2>
			</header>
		</div>
	</div>
	<div class="row subcat">
		<div class="col-sm-12 col-md-6 mb-4 mb-md-0">
			<div class="mr-md-5">
				<h4>Telefone</h4>
				<p>Ligue ou envie uma mensagem direto pelo WhatsApp!</p>
				<p class="mb-5">
					<a href="tel:+5511973332425" class="btn-yellow-line mr-2">
						<span>
							<i class="fas fa-mobile-alt"></i> 11 973332425
						</span>
					</a>					
					<a href="https://goo.gl/y6HFxr" class="btn-yellow-line">
						<span>
							<i class="fab fa-whatsapp"></i> WhatsApp
						</span>
					</a>
				</p>
				<h4>Localização</h4>
				<p>Artur Alvim, São Paulo.</p>
				<h4>Regiões atendidas</h4>
				<div id="accordion" class="mb-3">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          Zone leste
				        </button>
				      </h5>
				    </div>

				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
				      <div class="card-body">
				        Artur Alvim, Belenzinho, Ermelino Matarazzo, Itaquera, Limoeiro, Mooca, Parque São Lucas, Patriarca, Penha, São Miguel, Tatuapé, Vila Matilde e Vila Ré.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingTwo">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          Zona oeste
				        </button>
				      </h5>
				    </div>
				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				      <div class="card-body">
				        Água Branca, Barra Funda e Vila Pompéia.
				      </div>
				    </div>
				  </div>
				  <div class="card">
				    <div class="card-header" id="headingThree">
				      <h5 class="mb-0">
				        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				          Centro
				        </button>
				      </h5>
				    </div>
				    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				      <div class="card-body">
				        Bela Vista, Centro, Consolação e Jardins.
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">
			<h4 class="d-md-none">Escreva-me</h4>				
			<form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#form" method="POST">
				<p>				
					<label>
						<input name="remetenteNome" value="<?php echo $remetenteNome;?>" class="w-100" type="text" placeholder="Nome">
						<span class="error small"><?php echo $remetenteNomeErr;?></span>
					</label>
				</p>
				<p>
					<label>
						<input name="remetenteEmail" value="<?php echo $remetenteEmail;?>" class="w-100" type="email" placeholder="E-mail">
				  	<span class="error small"><?php echo $remetenteEmailErr;?></span>
				  </label>
				</p>
				<p class="flex-row d-flex">
					<input name="telefone1" type="number" value="<?php echo $telefone1;?>" class="w-50 mr-4" type="tel" placeholder="Telefone 1">
					<input name="telefone2" type="number" value="<?php echo $telefone2;?>" class="w-50" type="tel" placeholder="Telefone 2">
				</p>				
				<p>
					<textarea name="mensagem" class="w-100" placeholder="Mensagem"><?php echo $mensagem;?></textarea>
				</p>
				<div class="flex-row d-flex">				
					<div class="g-recaptcha" data-sitekey="6LcNJnEUAAAAAI1fcViM6ZWuZF0AI2e4CEEU1zyG"></div>
				</div>
				<div class="flex-row d-flex mt-3">
					<div class="mr-3">
						<button name="enviarFormulario" class="btn-yellow"><span>Enviar</span></button>
					</div>
					<div id="retorno" class="w-75 text-center font-weight-bold">
						<?php
						if(isset($mensagemRetorno)){
						echo $mensagemRetorno;
						}
						?>
					</div>
				</div>
			</form>
		</div>					
	</div>	
</section>