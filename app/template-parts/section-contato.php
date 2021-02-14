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
		<div class="col-sm-12 mb-4 text-center">
			<h4 class="">Bora conversar?</h4>
			<p>			
				<a href="https://api.whatsapp.com/send?phone=5511973332425&text=Ol%C3%A1,+meu+amigo!" class="btn-line-yellow d-inline-block mb-2">
					<span>
						<i class="fab fa-whatsapp"></i> WhatsApp
					</span>
				</a>

	 			<a href="tel:+5511973332425" class="btn-line-yellow d-inline-block mr-lg-2 mb-2">
					<span>
						<i class="fas fa-mobile-alt"></i> Ligar
					</span>
				</a>					
			</p>
			<!--
			<h4>Localização</h4>
			<p>Artur Alvim, São Paulo.</p>
			<h4>Regiões atendidas em domicílio</h4>
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
			        Ermelino Matarazzo, Itaquera, Artur Alvim, Patriarca, Vila Matilde, Penha, São Miguel, Tatuapé, Belém.
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
		-->
		</div>
		<div class="col-sm-12 col-md-6 m-auto text-center">
			<div class="d-flex justify-content-center">
				<form id="form" class="w-100" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#form" method="POST">
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
<!-- 			<p class="flex-row d-flex">
						<input name="telefone1" type="number" value="<?php echo $telefone1;?>" class="w-50 mr-4" type="tel" placeholder="Telefone 1">
						<input name="telefone2" type="number" value="<?php echo $telefone2;?>" class="w-50" type="tel" placeholder="Telefone 2">
					</p> 	-->				
					<p>
						<textarea name="mensagem" class="w-100" placeholder="Mensagem"><?php echo $mensagem;?></textarea>
					</p>
					<div class="flex-row d-flex w-100 text-center mb-4" style="overflow: hidden;">				
						<div class="text-center g-recaptcha" data-sitekey="6LcNJnEUAAAAAI1fcViM6ZWuZF0AI2e4CEEU1zyG"></div>
					</div>
					<button name="enviarFormulario" class="btn-yellow mb-4"><span>Enviar</span></button>
					<?php
					if(isset($mensagemRetorno)){
					echo $mensagemRetorno;
					}
					?>
				</form>
			</div>
		</div>					
	</div>	
</section>