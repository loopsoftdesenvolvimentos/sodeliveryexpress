<!DOCTYPE html>
<html>
	<?php include('componentes/head_quem-somos.inc'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/jcarousel.basic.css">
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jcarousel.basic.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery.jcarousel.min.js"></script>
	<body>
	 <?php include('componentes/header.inc'); ?>
    <main>

      <section class="quem-somos">
        <div class="divisao"></div>

        <div class="box-central">
          <div class="itens-flex">

            <div class="menu-lateral">
              <h3>Quem Somos</h3>

              <div class="lista-lateral">
                <ul>
                  <li class="btns selecionado"id="btn-historia" ><a >Nossa História</a></li>
                  <li class="btns" id="btn-missao"><a >Missão</a></li>
                  <li class="btns" id="btn-visao"><a >Visão</a></li>
                  <li class="btns" id="btn-valores"><a >Valores</a></li>
                  <li class="btns" id="btn-sobreNos"><a >Sobre a só Delivery Express</a></li>
                </ul>
              </div>
            </div>

            <div class="clear"></div>



            <div id="historia" class="carousel">

              <h3>Nossa história</h3>

							<div class="jcarousel-wrapper">
									<div class="jcarousel">
											<ul>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2013.jpg">
						                <div class="texto">
						                  <span>2013</span>
						                  <p>Lançada a Só delivery, focada em atender empresas que necessitavam de um parceiro no transporte Rápidos a Só Delivery Nasceu em Jundiai no Dia 14 de Setembro de 2013 ja com sua identidade Visual formada e com o objetivo de ser a maior empresa de transportes rápidos de Jundiaí/SP</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2013_2.jpg">
						                <div class="texto">
						                  <span>2013</span>
						                  <p>Com Apenas uma Moto Ybr 125cc Iniciou-se os trabalhos, a Só Delivery ainda Tímida começa suas Operações e poucos Clientes, Mais com a ascensão das redes Sócias, anúncio e Parcerias conseguiu se manter durante e se estabilizar durante o ano de 2013.</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2015.jpg">
						                <div class="texto">
						                  <span>2015</span>
															<p>Em 2015 já com um Forte Nome na cidade a Só Delivery inicia sua Expansão e quadro de Funcionários, buscando seu Objetivo de ser a maior e mais conheçida empresa de Transportes Rápidos em Jundiaí/SP, Se consolida em uma nova Sede e já conta com contratos com Grandes Marcas como Passarela.com sendo responsavel pela distribuição a Mais de 14 Cidades da Região de Jundiaí/SP. </p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2016.jpg">
						                <div class="texto">
						                  <span>2016</span>
															<p>E Assim se manteve no ano de 2016 sempre buscando novos cliente, para isso continuamos investindo em Anúncios na Internet e TV Locais além de Patrocinar Programas Regionais e Eventos</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2017.jpg">
						                <div class="texto">
						                  <span>2017</span>
															<p>A Só Delivery Também sofreu Com a forte Crise Financeira do País que Afetou Muitas empresas no Brasil e com isso teve que se readaptar as novas soluções e estrategias a serem seguidas durante o ano como diminuir seus custos e quadros de Funcionários Além de visto Grandes Parceiros ‘Quebrar’  e Perder Alguns Contratos.</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/historia/2018.jpg">
						                <div class="texto">
						                  <span>2018</span>
															<p>Um Ano de Muita Luta para empresa Sobreviver e se reinventar, em 4 Anos Foi o Pior Ano, a empresa Mudou sua Identidade e estrategias para conseguir se manter no mercado de entregas rápidas, Oferecendo Franquias do Modelo de Negócio e investindo em Plataformas e App para ainda tentar se diferenciar das demais. </p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/logo.png">
						                <div class="texto">
						                  <span>2018</span>
															<p>Ainda em 2018 a Só Delivery tomou uma decisão que mudaria sua História para sempre, começando mais uma vez pela sua identidade Visual que sempre foi uma prioridade, Passou a se dedicar ao Transportes como um todo desde de Motos a Carretas, Fazendo com que motoristas autônomos, frotistas, transportadoras e embarcadores economizem tempo e dinheiro através das nossa indicações.</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/logo.png">
						                <div class="texto">
						                  <span>2019</span>
															<p>A Só Delivery se Recupera e Lança sua mais nova ferramenta que vai Ajudar Motoristas encontrarem fretes, e transportadoras encontraem motoristas, desde de Leves a Pesados, um site completo e Moderno que vai Integrar, via internet, todos os segmentos do setor de transporte rodoviário de cargas.</p>
						                </div>
													</li>
											</ul>
									</div>

									<a href="#" class="left btns_carrousel jcarousel-control-prev"> < </a>
									<a href="#" class="right btns_carrousel jcarousel-control-next"> > </a>


									<div class="clear"></div>
		              <!-- <div class="linha-tempo" data-jcarouselpagination="true">
		                <div class="linha-entre-tempo"></div>

		                <a  class="bolinha-tempo nomarginleft">
		                  <div class="bolinha clicado"></div>
		                  <span class="span_selecionado">2013</span>
		                </a>

		                <a  class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2014</span>
		                </a>

		                <a  class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2015</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2016</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2017</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2018</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2019</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2020</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2021</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2022</span>
		                </a>

		                <a class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2023</span>
		                </a>
		              </div> -->
							</div>
            </div>
						<div id="missao" class="carousel hide">
              <h3>Missão</h3>
							<div class="row content-informations t-5">
								<img src="<?php echo base_url()?>public/img/icons/mission.svg">
								<div class="texto">
									<div class="texto">
										<p>Solucionar as mais diversas necessidades de Nossos cliente e Parceiros sempre com a máxima eficiencia</p>
									</div>
					    	</div>
						  </div>
				  	</div>
						<div id="visao" class="carousel hide">
							<h3>Visão</h3>
							<div class="row content-informations">
								<img src="<?php echo base_url()?>public/img/icons/view.svg">
								<div class="texto">
									<p>A Só Delivery surgiu do desafio de entrega Rápidas na região de jundiaí/SP, tornando-se referência em entrega de impressos. Atualmente oferecemos serviços de logística para empresas que necessitam de frequência, agilidade e pontualidade para as suas encomendas. Com centro de distribuição a Só Delivery realiza entregas simultâneas, em toda a região de jundiaí/sp. Contamos com uma extensa malha de distribuição e um excelente atendimento, além de profissionais 		 especializados em entregas porta a porta. Ideal para empresas que realizam comércio eletrônico e vendas diretas através de catálogos. Também para veículos de comunicação e editoras. Somos o melhor caminho para entregas, conectando sua empresa aos seus clientes.</p>
								</div>
							</div>
						</div>
						<div id="valores" class="carousel hide">
							<h3>Valores</h3>
							<div class="row content-informations t-5">
								<img src="<?php echo base_url()?>public/img/icons/values.svg">
								<ul>
									<li><p>Honestidade e credibilidade</p></li>
									<li><p>Agilidade nas entregas</p></li>
									<li><p>Trabalho em equipe</p></li>
									<li><p>Segurança e integridade da carga</p></li>
									<li><p>Preservação do meio ambiente</p></li>
									<li><p>Educação e segurança no trânsito</p></li>
								</ul>
							</div>
						</div>
						<div id="sobreNos" class="carousel hide">
							<h3>Sobre Nós</h3>
							<div class="row content-informations">
								<img src="<?php echo base_url()?>public/img/icons/about.svg">
								<div class="texto">
									<p>Distribuição Regional, Cartões, produtos, serviços, protocolados, simples e Impressos e prestação de serviço de motoboy; Este tipo de atividade caracteriza-se pela prestação de serviços por meio de mensageiros motorizados com motocicletas, oferecendo a seus clientes serviços de entregas e coletas rápidas de pequenas cargas, documentos, objetos de pequeno e médio porte, faturas e cobranças, malote e encomendas em geral. Motofrete - modalidade de transporte remunerado de pequenas cargas ou volumes em motocicleta, com equipamento adequado para acondicionamento de carga, nela instalado para esse fim; Nossa equipe é formada de entregadores de extrema esperiencia em entregas porta a porta, motofrete e de serviço de motoboy em geral; </p>
								</div>
							</div>
						</div>

          </div>
        </div>

      </section>

      <div class="clear"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
		<script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_slider.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_mobile.js"></script>
	</body>
</html>
