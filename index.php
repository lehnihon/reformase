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
				<p>A  ReformaSe é uma empresa especializada em reforma de imóveis, planejamento e execução de obras.<br>
					Nossa proposta é planejar e realizar sua reforma de forma rápida, segura e eficiente.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<?php include 'images/sobre1.svg'; ?>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre2.svg'; ?>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre3.svg'; ?>
			</div>
			<div class="col-md-3">
				<?php include 'images/sobre4.svg'; ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="#orcamento" class="btn-redondo btn-azul">Solicite um orçamento</a>
			</div>
		</div>
	</div>
</div>

<div id="solucoes-home">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Qual é o tipo de reforma?</h2><br>
				<p>Indique abaixo se você deseja realizar uma reforma residencial, reforma em apartamento, reforma comercial ou construção.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-1">
				<a class="ref-res" href="#">
					<?php include 'images/tipo1.svg'; ?>
					<p>Reforma residencial</p>
				</a>
			</div>
			<div class="col-md-4">
				<a class="ref-apt" href="#">
					<?php include 'images/tipo2.svg'; ?>
					<p>Reforma em apartamento</p>
				</a>
			</div>
			<div class="col-md-3">
				<a class="ref-com" href="#">
					<?php include 'images/tipo3.svg'; ?>
					<p>Reforma comercial</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="#orcamento" class="btn-redondo btn-azul">Solicite um orçamento</a>
			</div>
		</div>
	</div>
</div>

<div id="vantagens-home">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span>1</span></div>
			</div>
			<div class="col-md-6 text-left">
				<h2>Logística sob medida para cada loja virtual</h2><br>
				<p>Enteder as necessidades logísticas do cliente e desenvolver um projeto com soluções sob medida é a nossa
				 tarefa. Para isso, contamos com uma equipe capacitada para realizar um estudo customizado das necessidades de
				 logística de cada loja virtual, envolvendo fatores como viabilidade técnica, econômica e financeira para novos 
				 investimentos, visando soluções que aumentem a rentabilidade do cliente.</p><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span>2</span></div>
			</div>
			<div class="col-md-6 text-left">
				 <h2>Buscamos seus produtos com toda segurança</h2><br>
				 <p>Temos uma equipe especializada para coletar seus produtos dos seus fornecedores e trazer até nosso centro logístico, onde o estoque da sua loja
				  virtual ficará armazenada.</p><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span>3</span></div>
			</div>
			<div class="col-md-6 text-left">
				  <h2>Nosso espaço</h2><br>
				  <p>A Data Pontual conta com um amplo espaço para armazenagem para todos os tipos de produtos, desde cosméticos, 
				   suplementos, livros, roupas, acessórios e peças automotivas, materiais para confecção, eletrônicos e eletroportáteis.<br>
				   Nosso Centro de armazenagem amplo, seguro e bem localizado, também contamos com um cofre de segurança para
				 armazenar produtos de alto valor.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span>4</span></div>
			</div>
			<div class="col-md-6 text-left">
				<h2>Empacotamos seus produtos com segurança</h2><br>
				<p>Cada produto é cuidadosamente embalada com itens de proteção resistentes. Tudo para garantir
				 que a enconmenda chegue intacta ao destino final.<br>
				 Assim, você tem mais segurança nos envios e conomiza tempo e dinheiro, já que não precisará 
				 mais se preocupar com a compra de embalagens e o empacotamento de seus produtos.</p><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrap"><span>5</span></div>
			</div>
			<div class="col-md-6 text-left">
				 <h2>Transporte e Distribuição</h2><br>
				 <p>A Data Pontual possui uma equipe altamente qualificada e uma frota própria, tudo que seus envios
				  chegue ao destino final de forma segura e com o menor tempo possível.</p><br><br><br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2">
				<div class="wrapb"><span>6</span></div>
			</div>
			<div class="col-md-6 text-left">

				<h2>Sistema de Rastreamento Online e via App</h2><br>
				<p>A Data Pontual conta com um aplicativo de monitoramento de encomendas em tempo real.<br>
					O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de
				 entregas em locais errados.<br>
				 As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.</p><br><br>
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
