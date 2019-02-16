<!DOCTYPE html>
<html>
	<?php include('componentes/head_quem-somos.inc'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/jcarousel.basic.css">
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jcarousel.basic.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/js/jquery.jcarousel.min.js"></script>
	<body>
	 <?php include('componentes/header.inc'); ?>
    <main>
      <div class="clear"></div>

      <section class="quem-somos">
        <div class="divisao"></div>

        <div class="box-central">
          <div class="itens-flex">

            <div class="menu-lateral">
              <h3>Quem Somos</h3>

              <div class="lista-lateral">
                <ul>
                  <li class="btns selecionado"><a id="btn-historia">Nossa História</a></li>
                  <li class="btns"><a id="btn-missao">Missão</a></li>
                  <li class="btns"><a id="btn-visao">Visão</a></li>
                  <li class="btns"><a id="btn-valores">Valores</a></li>
                  <li class="btns"><a id="btn-sobreNos">Sobre a só Delivery Express</a></li>
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

		                <a href="#1" class="bolinha-tempo nomarginleft">
		                  <div class="bolinha clicado"></div>
		                  <span class="span_selecionado">2013</span>
		                </a>

		                <a href="#2" class="bolinha-tempo">
		                  <div class="bolinha"></div>
		                  <span>2014</span>
		                </a>

		                <a href="#3" class="bolinha-tempo">
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
											</ul>
									</div>

									<div class="clear"></div>

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
