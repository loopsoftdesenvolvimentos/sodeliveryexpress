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
              <li>Perguntas Recentes</li>
              <li>Maioria das Respostas</li>
              <li>Recentemente Respondido</li>
              <li>Sem respostas</li>
            </ul>
          </div>

          <div class="clear clear"></div>

          <div class="container-discussao">
            <div class="discussao">
              <img src="public/img/pessoa.jpg">
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
                <img src="public/img/icons/done.svg">
                <span>Salvo</span>
              </div>

              <div class="icon-item">
                <img src="public/img/icons/comentario.svg">
                <p><span>3 </span>comentários</p>
              </div>

              <div class="icon-item">
                <img src="public/img/icons/pessoa.svg">
                <p><span>300 </span>visualizações</p>
              </div>

            </div>
          </div>
        </div>

        <div class="clear clearNone"></div>


        <div class="listagem-lateral">
          <div class="contador-duvidas">

            <h4>Estatísticas</h4>
            <div class="container-contador">
              <img src="public/img/icons/question.svg">
              <a href="#">Questões <span>( 25 )</span></a>
            </div>
            <div class="container-contador">
              <img src="public/img/icons/comentario.svg">
              <a href="#">Respostas <span>( 23 )</span></a>
            </div>
            <div class="container-contador">
              <img src="public/img/icons/pessoa.svg">
              <a href="#">Usuários <span>( 40 )</span></a>
            </div>
          </div>


          <div class="clear"></div>

          <div class="container-midia">

            <h4>Nos encontre</h4>
            <div class="container-redes">
              <a href="https://www.facebook.com/sodeliveryExpress/" target="_blank" class="midia facebook">
                <img src="public/img/icons/facebook-white.png">
              </a>

              <a href="https://www.youtube.com/channel/UCb93S1zCUAToY4Da6zLF6_w" target="_blank" class="midia youtube">
                <img src="public/img/icons/youtube.png">
              </a>

              <a href="https://www.instagram.com/sodeliveryexpress" target="_blank" class="midia instagram">
                <img src="public/img/icons/instagram.png">
              </a>

              <a href="https://www.linkedin.com/company/sodeliveryexpress" target="_blank" class="midia facebook">
                <img src="public/img/icons/linkedin.png">
              </a>
            </div>
          </div>
        </div>
      </section>

      <div class="clear"></div>
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
	</body>
</html>
