<!DOCTYPE html>
<html>
  <?php include('componentes/head_contato.inc') ?>
  <body>
    <?php include('componentes/header.inc') ?>
    <main>
      <div class="container-cadastro content row">
        <div class="infors">
          <img src="<?php echo base_url()?>public/img/logo.png" alt="">
          <h2><b>Sede:</b> Jundiaí, São Paulo</h2>
          <h2><b>Fundada em:</b> 14 de setembro de 2013</h2>
          <h2><b>Especializações:</b> Transportes, Cargas, Fretes, MotoBoys e franquias</h2>
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
        <form class="form-contato" action="" method="post">
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
                <h1>Fale Conosco</h1>
            </div>
              <div class="container-cadastro-input">
                  <label for="nome_completo">Nome Completo</label>
                  <input type="text" name="nome_completo" required>
              </div>
              <div class="container-cadastro-input">
                  <label for="email">Email</label>
                  <input type="text" name="email" required>
              </div>
              <div class="container-cadastro-input">
                <label for='assunto'>Assunto</label>
                <input type="text" id="assunto" name="assunto" required>
              </div>
              <div class="container-cadastro-input">
                  <label for="mensagem">Mensagem:</label>
                  <textarea name="mensagem" rows="8" cols="20" required></textarea>
              </div>
              <div class="container-cadastro-input-button">
                <input type="submit" value="Enviar">
              </div>
           </div>
        </form>
      </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
     <?php include('componentes/footer.inc') ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
