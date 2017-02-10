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
			<div class="col-md-12 animated fadeInUp">
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
		<div class="row animated fadeInUp wow">
			<div class="col-md-12">
				<a href="<?php echo home_url( '/' )."reformas"; ?>" class="btn-redondo btn-roxo">Quero um Orçamento</a>
			</div>
		</div><br>
	</div>
</div>

<div id="solucoes-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated fadeInUp wow">
				<h2>Qual é o tipo de reforma?</h2><br>
				<h5>Indique abaixo se você deseja realizar uma reforma residencial, reforma em apartamento, reforma comercial ou construção.</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 animated fadeInLeft wow">
				<a class="ref-res" href="<?php echo home_url( '/' )."reforma-residencial"; ?>">
					<?php include 'images/tipo1.svg'; ?>
					<p>Reforma residencial</p>
				</a>
			</div>
			<div class="col-md-4 animated fadeIn wow">
				<a class="ref-apt" href="<?php echo home_url( '/' )."reforma-apartamento"; ?>">
					<?php include 'images/tipo2.svg'; ?>
					<p>Reforma em apartamento</p>
				</a>
			</div>
			<div class="col-md-3 animated fadeInRight wow">
				<a class="ref-com" href="<?php echo home_url( '/' )."reforma-comercial"; ?>">
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
				<div class="wrap"><span class="animated zoomIn wow"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant2.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left animated fadeInUp wow">
				 <h4>Gestão de Pagamento</h4>
				 <p>Nossa forma de pagamento cabe no seu bolso!<br>
					Você pode parcelar a execução da reforma do seu imóvel,
					mais comodidade e segurança que a ReformaSe
					oferece pra você.</p><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span class="animated zoomIn wow"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant3.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left animated fadeInUp wow">
				<h4>Seguro de Obra</h4>
				<p>A reforma do seu imóvel poderá contar ainda, com um 
					seguro de obra, com o intuito de te tranquilizar ainda mais.</p><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span class="animated zoomIn wow"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant1.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left animated fadeInUp wow">
				<h4>Acompanhe a reforma do seu imóvel</h4>
				<p>Acompanhe passo a passo o andamento da reforma do 
					seu imóvel, desde o orçamento e planejamento dos 
					serviços até a conclusão dos mesmos, através de 
					relatórios, fotografias e reuniões periódicas.</p><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrapb"><span class="animated zoomIn wow"><img alt="logo" class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/vant4.jpg"; ?>" /></span></div>
			</div>
			<div class="col-md-6 text-left animated fadeInUp wow">
				<h4>Manutenção Preventiva e corretiva</h4>
				<p>Com a Reforma Se, você também tem a opção de realizar a manutenção preventiva e corretiva do seu estabelecimento comercial e residencial.</p><br><br>
			</div>
		</div>
	</div>
</div>

<div id="depoimento">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animated fadeInUp wow">
				<h2>Depoimentos de nossos clientes</h2><br>
				<h5>Confira os depoimentos de quem já realizaram suas reformas com a gente!</h5>
			</div>
		</div><br><br><br>
		<div class="row">
			<div class="col-md-3 col-md-offset-1 text-center">
				<div class="dep-conteudo animated fadeInUp wow">
					“Agradecemos pelo ótimo atendimento e pela qualidade de todo o projeto que foi executado. Muito obrigado! ”<br>
					<div class="dep-foto imga"></div>
				</div>
				<h4>@ViveneCalcados</h4>
			</div>
			<div class="col-md-4 text-center">
				<div class="dep-conteudo animated fadeInUp wow" data-wow-delay="0.25s">
					“Muito obrigada, vocês são demais ReformaSe. Equipe super atenciosa, tudo feito no prazo que combinamos.”<br>
					<div class="dep-foto imgb"></div>
				</div>
				<h4>Patricia Alves</h4>
			</div>
			<div class="col-md-3 text-center">
				<div class="dep-conteudo animated fadeInUp wow" data-wow-delay="0.5s">
					“Reformase muito obrigado, a obra ficou excelente, tudo muito bem planejado e sem dor de cabeça pra mim. Valeu”<br>
					<div class="dep-foto imgc"></div>
				</div>
				<h4>Antonio Carlos</h4>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
