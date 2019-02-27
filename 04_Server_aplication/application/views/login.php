<!DOCTYPE html>
<html>
  <?php include('componentes/head_login.inc'); ?>
  <body>
    <?php
      // if (count($_GET) > 0) {
      //   $decode_get =  base64_decode($_GET["6b3c7e24c6afaaaf1c2c61160e25d71b"]);
      //   if($_GET["6b3c7e24c6afaaaf1c2c61160e25d71b"] == $decode_get){
      // }
    ?>
    <div class="container">
      <div class="tab_header">
        <ul class="tabs">
            <li class="trocar_display tab_header2 active" data-tab="Assinantecontent">Central Assinante</li>
            <li class="trocar_display" data-tab="Veiculocontent">Veículo</li>
        </ul>
      </div>
      <section id="Assinantecontent" class="tirar_display trocar_display column">
        <div class="icon-home">
          <a href="<?php echo base_url() ?>pages/index">
            <img src="<?php echo base_url() ?>public/img/icons/home.svg" alt="icons">
          </a>
        </div>
        <div class="icon-display">
          <img src="<?php echo base_url() ?>public/img/icons/login-dark.svg" alt="icons">
        </div>
        <form action="/crud/logar" method="post">
            <div class="container-input">
              <label for="email_user">Email</label>
              <input type="text" name="email_user"  id="login_user" placeholder="Email">
            </div>
            <div class="container-input">
              <label for="Senha_login">Senha</label>
              <input type="text" name="Senha_login"  id="Senha_login" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="<?php echo base_url() ?>pages/cadastro_se">Cadastre-se</a></strong></p>
            </div>
      </form>
    </section>
    <section id="Veiculocontent" class="tirar_display column">
      <div class="icon-home">
        <a href="index">
          <img src="<?php echo base_url() ?>public/img/icons/home.svg" alt="icons">
        </a>
      </div>
      <div class="icon-display">
        <img src="<?php echo base_url() ?>public/img/icons/truck-front_preto.svg" alt="icons">
      </div>
       <form id='login_motorista'>
         <?php
           echo validation_errors('<div id="mensagem">','</div>');
          ?>
          <div class="mensagem" id="mensagem" ></div>
            <div class="container-input">
              <label for="Placa_placa">Placa</label>
              <input type="text" name="login_user"  id="login_user" placeholder="Digite placa">
            </div>
            <div class="container-input">
              <label for="Senha_placa">Senha</label>
              <input type="text" name="Senha_placa"  id="Senha_placa" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="button" id="Entrar_motorista" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="acesso_veiculo_index.html">Cadastre-se</a></strong></p>
            </div>
      </form>
    </section>
  <?php //}else{ ?>
    <section class="tirar_display column">
        <div class="icon-home">
        <a href="index">
          <img src="<?php echo base_url() ?>public/img/icons/home.svg" alt="icons">
        </a>
        </div>
        <form action="/logar" method="post">
            <div class="container-input">
              <label for="email_user">Email</label>
              <input type="text" name="email_user"  id="login_user" placeholder="Email">
            </div>
            <div class="container-input">
              <label for="Senha_login">Senha</label>
              <input type="text" name="Senha_login"  id="Senha_login" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="<?php echo base_url() ?>pages/cadastro_se">Cadastre-se</a></strong></p>
            </div>
          </form>
    </section>
  <?php //} ?>
</div>

    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
    <script type="text/javascript">
      executar_forms(url_app+'Auth_veiculo/authenticate_motorista','#Entrar_motorista','Auth_veiculo/acesso_veiculo','#login_motorista')
    </script>
  </body>
</html>
