<?php include 'template-parts/mail.php'; ?>

<section id="contato" data-aos="fade" class="container min-h-100-lg">			
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
				<p>
					<a href="tel:+5511973332425">11 973332425</a><br>
					<small><a href="https://goo.gl/y6HFxr">Link para mensagem no WhatsApp</a></small>
				</p>
				<h4>Localização</h4>
				<p>
					<a target="_blank" href="https://www.google.com/maps/place/S%C3%A3o+Paulo,+SP/@-23.6815315,-46.8754814,10z/data=!3m1!4b1!4m13!1m7!3m6!1s0x94ce66b99a42eac7:0x8ed06d80800b0a3c!2sItaquera,+S%C3%A3o+Paulo+-+SP,+08210-450!3b1!8m2!3d-23.5398463!4d-46.4475328!3m4!1s0x94ce448183a461d1:0x9ba94b08ff335bae!8m2!3d-23.5504546!4d-46.633358">Itaquera, São Paulo</a>
					<br>
					<small>Tempo de 10 a 15 minutos partindo de carro ou ônibus das estações Itaquera ou Artur Alvim.</small>
				</p>
				<h4>Regiões atendidas</h4>
				<p>Para saber se atendo a sua região, por favor entre em contato.</p>
			</div>
		</div>
		<div class="col-sm-12 col-md-6">				
			<form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#form" method="POST">
				<p>				
					<label>
						<input name="remetenteNome" value="<?php echo $remetenteNome;?>" class="w-100" type="text" placeholder="Nome">
						<div class="error small"><?php echo $remetenteNomeErr;?></div>
					</label>
				</p>
				<p>
					<label>
						<input name="remetenteEmail" value="<?php echo $remetenteEmail;?>" class="w-100" type="email" placeholder="E-mail">
				  	<div class="error small"><?php echo $remetenteEmailErr;?></div>
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
						<button name="enviarFormulario" class="btn"><span>Enviar</span></button>
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