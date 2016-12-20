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
			<div class="col-md-6 text-left anima-a">
				<h1>Oque a Data Pontual pode fazer pela sua loja virtual?</h1><br>
				<p>A Data Pontual oferece soluções completas de logística para lojas virtuais.<br>
					Desde o processo de planejamento, coleta, armazenagem, picking, montangem de kits, 
					logística reversa até a entrega para o consumidor final, tudo com segurança, qualidade e tecnologia</p>
				<p>Contamos com um centro logístico amplo e seguro para a armazenagem do estoque das lojas virtuais, tudo para 
					garantir que todos os produtos sejam armazenados, embalados de forma segura e com o menor tempo.</p>
				<ul>
					<li><span>Buscamos seus produtos nos seus fornecedores</span></li>
					<li><span>Seviços de Armazenagem</span></li>
					<li><span>Picking</span></li>
					<li><span>Expedição</span></li>
					<li><span>Cross Docking</span></li>
					<li><span>Montagem de Kits</span></li>
					<li><span><span>Transporte e Distribuição</span></li>
					<li><span>Projeto personalizado para cada loja virtual</span></li>
				</ul><br>
				<a href="#orcamento" class="btn-redondo btn-azul">Solicite um orçamento</a>
			</div>
			<div class="col-md-6 anima-b">
				<img class="img-responsive" alt="feios" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/feios.jpg"; ?>"/>
			</div>
		</div>
	</div>
</div>

<div id="solucoes-home">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 anima-c">
				<h2>Logística completa para e-Commerce</h2><br>
				<p>Com a nossa solução completa de logística para loja virtual, você não perde mais tempo embalando
				 e levando os produtos para os Correios. Quando a loja virtual escolhe por armazenar seu próprio estoque,
				 nem sempre é a operação mais econômica.</p><br><br>
				<img class="img-responsive" alt="processo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/processo.jpg"; ?>"/><br><br>
				<p>O que você deve levar em consideração é que, além do custo operacional, muitas vezes acaba investindo o
				 seu tempo para preparar, embalar despachar os produtos, e coloca em risco a evolução da própria loja,
				 uma vez que você não fica 100% focado nas estratégias de venda e crescimento da loja virtual.</p>
				 <p>Contar com uma empresa especializado em logística para lojas virtuais, que oferece soluções inteligentes de
				  armazenagem, manuseio e entrega, é um investimento que pode se pagar em curto ou médio prazo.</p><br>
				  <a href="#orcamento" class="btn-redondo btn-azul">Solicite um orçamento</a>
			</div>
		</div>
	</div>
</div>

<div id="vantagens-home">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-left anima-d">
				<h2>Logística sob medida para cada loja virtual</h2><br>
				<p>Enteder as necessidades logísticas do cliente e desenvolver um projeto com soluções sob medida é a nossa
				 tarefa. Para isso, contamos com uma equipe capacitada para realizar um estudo customizado das necessidades de
				 logística de cada loja virtual, envolvendo fatores como viabilidade técnica, econômica e financeira para novos 
				 investimentos, visando soluções que aumentem a rentabilidade do cliente.</p><br><br>
				 <h2>Buscamos seus produtos com toda segurança</h2><br>
				 <p>Temos uma equipe especializada para coletar seus produtos dos seus fornecedores e trazer até nosso centro logístico, onde o estoque da sua loja
				  virtual ficará armazenada.</p><br><br>
				  <h2>Nosso espaço</h2><br>
				  <p>A Data Pontual conta com um amplo espaço para armazenagem para todos os tipos de produtos, desde cosméticos, 
				   suplementos, livros, roupas, acessórios e peças automotivas, materiais para confecção, eletrônicos e eletroportáteis.<br>
				   Nosso Centro de armazenagem amplo, seguro e bem localizado, também contamos com um cofre de segurança para
				 armazenar produtos de alto valor.</p>
			</div>
			<div class="col-md-6 text-left anima-e">
				<h2>Empacotamos seus produtos com segurança</h2><br>
				<p>Cada produto é cuidadosamente embalada com itens de proteção resistentes. Tudo para garantir
				 que a enconmenda chegue intacta ao destino final.<br>
				 Assim, você tem mais segurança nos envios e conomiza tempo e dinheiro, já que não precisará 
				 mais se preocupar com a compra de embalagens e o empacotamento de seus produtos.</p><br><br>
				 <h2>Transporte e Distribuição</h2><br>
				 <p>A Data Pontual possui uma equipe altamente qualificada e uma frota própria, tudo que seus envios
				  chegue ao destino final de forma segura e com o menor tempo possível.</p><br><br>
				<h2>Sistema de Rastreamento Online e via App</h2><br>
				<p>A Data Pontual conta com um aplicativo de monitoramento de encomendas em tempo real.<br>
					O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de
				 entregas em locais errados.<br>
				 As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.</p>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-12 anima-f">
				<a class="saiba-mais" href="<?php echo home_url( '/' )."contato"; ?>">Saiba mais</a>
			</div>
		</div>
	</div>
</div>

<div id="orcamento">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 anima-g">
			<h2>Solicite um orçamento</h2><br>
			<p>Um especialista da Data Pontual entrará em contato com você!</p>
			form
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
