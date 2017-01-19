<?php
/**
 * @package site
 */

get_header(); ?>

<div id="topo" class="container-fluid">
	<div class="row">		
		<?php putRevSlider( "banner-index" ) ?>		
	</div>
</div>

<div id="sobre-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Reforma de Imóveis</h1><br>
				<h5>A  ReformaSe é uma empresa especializada em reforma de imóveis, planejamento e execução de obras.<br>
					Nossa proposta é planejar e realizar sua reforma de forma rápida, segura e eficiente.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 anima-a">
				<?php include 'images/sobre1.svg'; ?>
				<h4>Orçamento gratuito</h4>
				<p>
					Você solicita um orçamento e a ReformaSe faz um planejamento detalhado e te envia sem custo nenhum a proposta para reforma.
				</p>
			</div>
			<div class="col-md-3 anima-b">
				<?php include 'images/sobre2.svg'; ?>
				<h4>Planejamento</h4>
				<p>
					Após a sua aprovação da proposta, você receberá um cronograma com todo o passo-a-passo da reforma do seu imóvel.
				</p>
			</div>
			<div class="col-md-3 anima-c">
				<?php include 'images/sobre3.svg'; ?>
				<h4>Garantia</h4>
				<p>
					Garantimos a execução da sua obra dentro do prazo  estipulado, assegurando toda a qualidade.
				</p>
			</div>
			<div class="col-md-3 anima-d">
				<?php include 'images/sobre4.svg'; ?>
				<h4>Segurança de contrato</h4>
				<p>
					Tenha a segurança do prazo de execução da sua reforma, bem como do valor acordado, garantidos em contrato
				</p>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-12">
				<a href="#orcamento" class="btn-redondo btn-roxo">Quero um Orçamento</a>
			</div>
		</div><br>
	</div>
</div>

<div id="solucoes-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Qual é o tipo de reforma?</h2><br>
				<h5>Indique abaixo se você deseja realizar uma reforma residencial, reforma em apartamento, reforma comercial ou construção.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 anima-f col-md-offset-1">
				<a class="ref-res" href="#">
					<?php include 'images/tipo1.svg'; ?>
					<p>Reforma residencial</p>
				</a>
			</div>
			<div class="col-md-4 anima-e">
				<a class="ref-apt" href="#">
					<?php include 'images/tipo2.svg'; ?>
					<p>Reforma em apartamento</p>
				</a>
			</div>
			<div class="col-md-3 anima-g">
				<a class="ref-com" href="#">
					<?php include 'images/tipo3.svg'; ?>
					<p>Reforma comercial</p>
				</a>
			</div>
		</div>
	</div>
</div>

<div id="vantagens-home">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span class="anima-h"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant1.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left">
				<h4>Acompanhe a reforma do seu imóvel</h4><br>
				<p>Acompanhe passo a passo o andamento da reforma do 
					seu imóvel, desde o orçamento e planejamento dos 
					serviços até a conclusão dos mesmos, através de 
					relatórios, fotografias e reuniões periódicas.</p><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span class="anima-i"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant2.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left">
				 <h4>Gestão de Pagamento</h4><br>
				 <p>Nossa forma de pagamento cabe no seu bolso!<br>
					Você pode parcelar a execução da reforma do seu imóvel,
					mais comodidade e segurança que a ReformaSe
					oferece pra você.</p><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrapb"><span class="anima-j"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant3.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left">
				<h4>Seguro de Obra</h4><br>
				<p>A reforma do seu imóvel poderá contar ainda, com um 
					seguro de obra, com o intuito de te tranquilizar ainda mais.</p><br><br>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 anima-f">
				<a class="saiba-mais" href="<?php echo home_url( '/' )."ligue-agora"; ?>">Ligue Agora</a>
			</div>
		</div>
	</div>
</div>

<div id="orcamento">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 anima-g">
			<h2>Solicite um orçamento</h2><br>
			<p>Um especialista da Data Pontual entrará em contato com você!</p>
			<div class="form7">
			<?php echo do_shortcode( '[contact-form-7 id="307" title="solicite um orcamento"]' ); ?>
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
