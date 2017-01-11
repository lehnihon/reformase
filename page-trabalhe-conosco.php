<?php
get_header('sem-banner'); ?>

<section id="contato-pag">
	<div class="container">
		<div class="row">
			<div class="col-md-6 info-left text-left">
				<h1 class="small">Trabalhe Conosco</h1><br>
				<h4>Envie sua mensagem para nós e seu currículo no email destacado ao lado</h4>
				<div class="form7">
				<?php echo do_shortcode( '[contact-form-7 id="311" title="Sem título"]' ); ?>
				</div>
			</div>
			<div class="col-md-6 text-left">
				<div class="info-right">
					Envie seu currículo para<br>
					curriculo@datapontual.com.br
					<br><br><strong>Telefone</strong>
					<br>11 2061-3138
					<br><br><strong>Endereço</strong>
					<br>Rua Nova Hamburgo, 99
					<br>Ipiranga - São Paulo - SP
				</div>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
