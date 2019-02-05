<!DOCTYPE html>
<html>
	<?php include('componentes/head_assinante.inc'); ?>
	<body>
	   <?php include('componentes/header.inc'); ?>
    <main>

      <div class="clear"></div>


      <h2 align="center">Canal do Assinante</h2>

      <div class="clear"></div>
      <section class="all content">

        <div class="forum">
          <div class="menu-forum">
            <ul id="menu_forum">
              <li id="btn-central" class="menu_active">Central da Perguntas</li>
              <li id="btn-queroassinar" >Quero Assinar</li>
            </ul>
          </div>
          <script type="text/javascript">
            $('#btn-central').click(function(){
              $( this ).addClass('menu_active');
              $('#btn-queroassinar').removeClass('menu_active');

              $('#container-central').show();
              $('#form-queroassinar').hide();
            });
            $('#btn-queroassinar').click(function(){
              $( this ).addClass('menu_active');
              $('#btn-central').removeClass('menu_active');

              $('#form-queroassinar').show();
              $('#container-central').hide();
            })
          </script>
          <div class="clear clear"></div>

          <div id="container-central" class="container-discussao">
            <div class="discussao">
              <img src="<?php echo base_url()?>public/img/pessoa.jpg">
              <div class="item-discussao">
                <h3>Título da discussão</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>

            <div class="end-discussao">
              <div class="icon-item">
                <img src="<?php echo base_url()?>public/img/icons/done.svg">
                <span>Salvo</span>
              </div>

              <div class="icon-item">
                <img src="<?php echo base_url()?>public/img/icons/comentario.svg">
                <p><span>3 </span>comentários</p>
              </div>

              <div class="icon-item">
                <img src="<?php echo base_url()?>public/img/icons/pessoa.svg">
                <p><span>300 </span>visualizações</p>
              </div>

            </div>
          </div>
          <div id="form-queroassinar" class="container-discussao disp_none">
            <form class="form" action="" method="post">
              <div class="container-cadastro-espacos">
                <div class="container-cadastro-titulo">
                    <h1>Quero Assinar</h1>
                </div>
                  <div class="container-cadastro-input">
                      <label for="nome">Nome Complemento</label>
                      <input type="text"name="nome">
                  </div>
                  <div class="container-cadastro-input">
                      <label for="Estados">Estados</label>
                      <input type="text" id="Estados" name="Estados">
                  </div>
                  <div class="container-cadastro-input">
                      <label for="Cidade">Cidade</label>
                      <input type="text" id="Cidade" name="Cidade">
                  </div>
                  <div class="container-cadastro-input">
                      <label for="email">Email</label>
                      <input type="text" name="email">
                  </div>
                  <div class="container-cadastro-input-button">
                      <input type="submit" value="Confirmar cadastro">
                  </div>
             </div>
            </form>
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
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
	</body>
</html>
