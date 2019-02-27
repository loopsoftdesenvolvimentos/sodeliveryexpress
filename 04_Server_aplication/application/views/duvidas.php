<!DOCTYPE html>
<html>
	<?php include('componentes/head_duvida.inc'); ?>
	<body>
	   <?php include('componentes/header.inc'); ?>
    <main>

      <div class="clear"></div>


      <h2 align="center">Deixe suas dúvidas conosco!</h2>

      <div class="clear"></div>
      <section class="all content">

        <div class="forum">
          <div class="menu-forum">
            <ul id="menu_forum">
              <li id="btn-duvidas" class="menu_active">Dúvidas</li>
							<li id="btn-mandeDuvidas">Mande sua dúvida</li>
            </ul>
          </div>
          <div class="clear clear"></div>
					<div id="container-duvidas">
						<?php foreach ($duvidas as $duvida) {
							echo '<div id="duvida'.$duvida->id_duvida.'" class="container-discussao">
								<div class="discussao">
									<div class="item-discussao">
										<h3>' .$duvida->pergunta. '</h3>
										<p>' .$duvida->resposta.'</p>
										<p>' .$duvida->extra.'</p>
									</div>
								</div>
								<div class="end-discussao">
									<div class="icon-item">
									 <div id="fb-root"></div>
									 <div class="fb-share-button" data-href="http://localhost/sodeliveryexpress/04_Server_aplication/pages/duvidas" data-layout="button_count" data-size="large" data-mobile-iframe="true">
										 <a target="_blank" href="http://localhost/sodeliveryexpress/04_Server_aplication/pages/duvidas" class="fb-xfbml-parse-ignore">Compartilhar</a>
									 </div>
									</div>
								</div>
							</div>';
						} ?>
					</div>
					<div id="form-mandeDuvidas" class="container-discussao none">
            <form class="form" action="" method="post">
              <div class="container-cadastro-espacos">
                <div class="container-cadastro-titulo">
                    <h1>Mande Suas Dúvidas</h1>
                </div>
                  <div class="container-cadastro-input">
                      <label for="nome">Nome Complemento</label>
                      <input type="text"name="nome">
                  </div>
                  <div class="container-cadastro-input">
                      <label for="email">Email</label>
                      <input type="text" name="email">
                  </div>
									<div class="container-cadastro-input">
	                  <label for="obs">Descreva sua dúvida</label>
	                  <textarea name="name" rows="8" cols="10"></textarea>
	                </div>
                  <div class="container-cadastro-input-button">
                      <input type="submit" value="Enviar Dúvida">
                  </div>
             </div>
            </form>
          </div>
          </div>
        </div>

        </div>
        <div class="clear clearNone"></div>
        <div class="listagem-lateral">
          <div class="clear"></div>
          <div class="container-midia">
            <h4>Nos encontre</h4>
            <div class="container-redes">
              <a href="https://www.facebook.com/sodeliveryExpress/" target="_blank" class="midia facebook">
                <img src="<?php echo base_url()?>public/img/icons/facebook-white.png">
              </a>
              <a href="https://www.youtube.com/channel/UCb93S1zCUAToY4Da6zLF6_w" target="_blank" class="midia youtube">
                <img src="<?php echo base_url()?>public/img/icons/youtube.png">
              </a>
              <a href="https://www.instagram.com/sodeliveryexpress" target="_blank" class="midia instagram">
                <img src="<?php echo base_url()?>public/img/icons/instagram.png">
              </a>
              <a href="https://www.linkedin.com/company/sodeliveryexpress" target="_blank" class="midia facebook">
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
		<script async defer src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2"></script>
		<script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>public/js/btn_duvidas.js"></script>
	</body>
</html>
