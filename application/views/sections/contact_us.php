<section class="contact-us" id="contact">
	<div class="container">
		<div class="section-header">
			<h2 class="white-text">Contacto</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="inner contact">
		                <div class="contact-form">
		                    <form id="contact-us" method="post" action="<?= base_url('index.php/Main/sendMail') ?>">
		                        <div class="col-xs-12 wow animated" data-wow-delay=".5s">
		                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Nombre" <?= (isset($name)) ? 'value='.$name : '' ?> />
		                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Correo" <?= (isset($mail)) ? 'value='.$mail : '' ?> />
		                            <textarea name="message" id="message" class="form textarea"  placeholder="Mensaje"><?= (isset($message)) ? $message : '' ?></textarea>
		                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Enviar</button> 
		                        </div> 
		                        <div class="clear"></div>
		                    </form>
		                    <? if(isset($correo)): ?>
								<? if($correo == 'OK'): ?>
									<div class="mail-message-area">
										<div id="email-message" class="alert mail-message visible-message">
											<p><strong>¡Muchas gracias!</strong> Su correo ha sido enviado.</p>
										</div>
									</div>
								<? elseif($correo == 'NOK'): ?>
									<div class="mail-message-area">
										<div id="email-message" class="alert mail-message visible-message">
											<p><strong>Lo sentimos</strong>, ha habido un problema, por favor intente nuevamente.</p>
										</div>
									</div>
								<? endif; ?>
								<script type="text/javascript">
									document.getElementById('email-message').focus();
								</script>
							<? endif; ?>
		                </div>
		            </div>
		            <p>
		            <a href="<?= base_url('assets/docs/WMD Consultores.pdf') ?>" target="blank_">
		            <div class="row">
						<div class="col-md-12">
							
						</div>
					</div>
					</a>
					</p>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<p>Nos estamos trasladando a otra oficina, pronto informaremos nuestra nueva dirección.</p>
							<p>Teléfono: (56) 2 2415 9171</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<span class="span-brochure">
								Descargar brochure
								<img alt="Brochure" src="<?= base_url('assets/img/brochure.png') ?>" class="img-brochure">
							</span>
							<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.271181415662!2d-70.59158968423446!3d-33.41617368078389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf164e6aee19%3A0x16030a49261e4db8!2sAlc%C3%A1ntara+107%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1477657781359" width="400" height="300" frameborder="0" style="border:0" class="img-rounded" allowfullscreen></iframe>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
