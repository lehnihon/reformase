<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>

	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-left">
					<strong>Data Pontual</strong><br>
					<p>Rua Nova Hamburgo, 99 - Ipiranga<br>
						São Paulo - SP</p>
				</div>
				<div class="col-md-2 text-left">
					<strong>A Empresa</strong><br>
					<p><a href="#sobre-home">Sobre a Data Pontual</a><br>
						<a href="#orcamento">Fale Conosco</a></p>
				</div>
				<div class="col-md-2 text-left">
					<strong>Serviços</strong><br>
					<p><a href="#solucoes-home">Logística para e-Comm.</a><br>
						<a href="#orcamento">Solicite um Orçamento</a></p>
				</div>
				<div class="col-md-2 text-left">
					<strong>Telefones</strong><br>
					<p>11 2061-3138</p>
				</div>
				<div class="col-md-3 text-left">
					<strong>Data Pontual nas redes sociais</strong><br>
					<ul class="redes_sociais_header">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>
						<li class="facebook"><a target="_blank" href="#"></a></li>
					</ul>					
				</div>
			</div><br>
		</div>
	</div>
	<div id="copy">
		<div class="container">
			<div class="row copy-text">
				<div class="col-md-6 text-left text-footer">
					&copy; Copyright <?php echo date('Y') ?> - Data Pontual - Logística para Lojas Virtuais
				</div>
				<div class="col-md-3 col-md-offset-3 text-left">
					<a target="_blank" href="http://agenciarino.com.br/">
						<span>Desenvolvido por</span>
						<img class="e-claro anima-rino" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/rino-bot.png"; ?>" />
					</a>
				</div>				
			</div>
		</div><!-- .container -->
	</div><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
