<?php
/**
 * @package site
 */

get_header(); ?>

<div id="topo" class="container-fluid">
	<div class="row">		
		<?php putRevSlider( "banner-sobre" ) ?>		
	</div>
</div>

<div id="sobre-descricao">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1>Conheça a Data Pontual</h1><br>
				<p>A Data Pontual oferece soluções completas de logística para lojas virtuais, desde o processo de planejamento, 
				busca dos produtos no seu fornecedor, armazenagem, picking, montagem de kits, logística reversa até a entrega 
				para o consumidor final, tudo com segurança, qualidade e tecnologia.</p>
				<p>Contamos com um centro logístico amplo e seguro para a armazenagem do estoque das lojas virtuais, tudo para garantir 
				que todos os produtos sejam armazenados, embalados e enviados de forma segura e com o menor tempo.</p>
			</div>
		</div>
		<div class="row"><br><br>
			<div class="col-md-12">
				<h2>Serviços</h2>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-2 text-left">
				<ul>
					<li><span>Buscamos seus produtos nos seus fornecedores</span></li>
					<li><span>Seviços de Armazenagem</span></li>
					<li><span>Picking</span></li>
					<li><span>Expedição</span></li>
				</ul>
			</div>
			<div class="col-md-4 text-left">
				<ul>
					<li><span>Cross Docking</span></li>
					<li><span>Montagem de Kits</span></li>
					<li><span>Transporte e Distribuição</span></li>
					<li><span>Projeto personalizado para cada loja virtual</span></li>
				</ul>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-1.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-2.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-3.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-4.jpg"; ?>" />
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-5.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-6.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-7.jpg"; ?>" />
			</div>
			<div class="col-md-3">
				<img alt="logo" class="img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/datapontual-sobre-8.jpg"; ?>" />
			</div>
		</div>
	</div>
</div>

<div id="fale-conosco">
	<div class="container">
		<div class="col-md-12 text-center">
			<img class="img-responsivo" alt="processo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/fale-conosco.jpg"; ?>"/>
		</div>
	</div>
</div>

<?php get_footer(); ?>
