<!DOCTYPE html>
<html>
	<?php include('componentes/head_duvida.inc'); ?>
	<body>
	   <?php include('componentes/header.inc'); ?>
    <main>

      <div class="clear"></div>


      <h2 align="center">Perfil da SóDelivery</h2>

      <div class="clear"></div>
      <section class="all content">

        <div class="forum">

          <div class="clear clear"></div>

          <div class="container-discussao">
						<div class="end-discussao">
							<div class="icon-item">
								<img src="<?php echo base_url()?>public/img/icons/pessoa.svg">
								<p><span>0 </span>visualizações</p>
							</div>
							<div class="icon-item">
								<img src="<?php echo base_url()?>public/img/icons/frete-dark.svg">
								<p><span>0 </span>Fretes Cadastrados</p>
							</div>
							<div class="icon-item">
								<img src="<?php echo base_url()?>public/img/icons/veiculos-dark.svg">
								<p><span>0 </span>Veículos Vinculados</p>
							</div>
						</div>
            <div class="discussao">
              <img src="<?php echo base_url()?>public/img/logo.png">
              <div class="item-discussao">
                <h3>Razão Social</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
						<div class="discussao">
							<div class="item-discussao discussao_icons">
								<div class="row">
									<img src="<?php echo base_url()?>public/img/icons/endereco-dark.svg">
									<h3>Endereço</h3>
								</div>
								<p>Rua: XXX, 140.</p>
								<p>CEP: </p>
							</div>
							<div class="item-discussao discussao_icons">
								<div class="row">
									<img src="<?php echo base_url()?>public/img/icons/veiculos-dark.svg">
									<h3>Telefones</h3>
								</div>
								<p>Telefone: Telefone .</p>
								<p>Telefone: Telefone_01 .</p>
								<p>Telefone: Telefone_02 .</p>
								<p>Telefone: Telefone_03 .</p>
							</div>
							<div class="item-discussao discussao_icons">
								<div class="row">
									<img src="<?php echo base_url()?>public/img/icons/veiculos-dark.svg">
									<h3>Redes Sociais</h3>
								</div>
								<a href="" target="_blank" class="midia facebook">
	                <img src="<?php echo base_url()?>public/img/icons/facebook-white.png">
	              </a>
								<a href="" target="_blank" class="midia facebook">
	                <img src="<?php echo base_url()?>public/img/icons/linkedin.png">
	              </a>
							</div>
						</div>
          </div>
        </div>

        <div class="clear clearNone"></div>


        <div class="listagem-lateral">
          <div class="contador-duvidas">

            <h4>Últimos Fretes cadastrados</h4>
            <div class="container-contador">
              <img src="<?php echo base_url()?>public/img/icons/frete-dark.svg">
              <a href="#">CIDADE_UF <span> DESTINO_UF</span></a>
            </div>
            <div class="container-contador">
              <img src="<?php echo base_url()?>public/img/icons/frete-dark.svg">
                <a href="#">CIDADE_UF <span> DESTINO_UF</span></a>
            </div>
            <div class="container-contador">
              <img src="<?php echo base_url()?>public/img/icons/frete-dark.svg">
              <a href="#">CIDADE_UF <span> DESTINO_UF</span></a>
            </div>
          </div>


          <div class="clear"></div>

          <div class="container-midia">

            <h4>Redes Sociais</h4>
            <div class="container-redes">
              <a href="" target="_blank" class="midia facebook">
                <img src="<?php echo base_url()?>public/img/icons/facebook-white.png">
              </a>

              <a href="" target="_blank" class="midia youtube">
                <img src="<?php echo base_url()?>public/img/icons/youtube.png">
              </a>

              <a href="" target="_blank" class="midia instagram">
                <img src="<?php echo base_url()?>public/img/icons/instagram.png">
              </a>

              <a href="" target="_blank" class="midia facebook">
                <img src="<?php echo base_url()?>public/img/icons/linkedin.png">
              </a>
            </div>
          </div>
        </div>
      </section>

      <div class="clear"></div>
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
	</body>
</html>
