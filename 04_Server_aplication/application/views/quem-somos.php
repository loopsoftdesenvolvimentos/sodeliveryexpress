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
														<img src="<?php echo base_url()?>public/img/logo.png">

						                <div class="texto">
						                  <span>2013</span>

						                  <p>Comunismo - Modelo de sociedade que prevê a eliminação completa de toda a forma de propriedade privada.
						                    Tratava-se de proposta antiga.Para alguns especialistas, está presente desde a Antiguidade, em obras como
						                    a de Platão</p>
						                </div>
													</li>
													<li class="container-carousel">
														<img src="<?php echo base_url()?>public/img/logo.png">

						                <div class="texto">
						                  <span>2014</span>

						                  <p>Comunismo - Modelo de sociedade que prevê a eliminação completa de toda a forma de propriedade privada.
						                    Tratava-se de proposta antiga.Para alguns especialistas, está presente desde a Antiguidade, em obras como
						                    a de Platão</p>
						                </div>
													</li>
											</ul>
									</div>

									<a href="#" class="left btns_carrousel jcarousel-control-prev"> < </a>
									<a href="#" class="right btns_carrousel jcarousel-control-next"> > </a>


									<div class="clear"></div>
		              <div class="linha-tempo" data-jcarouselpagination="true">
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
		              </div>
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
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
		<script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_slider.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_mobile.js"></script>
	</body>
</html>
