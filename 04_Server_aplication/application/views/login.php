<!DOCTYPE html>
<html>
  <?php include('componentes/head_login.inc'); ?>
  <body>
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
          <?php
          echo validation_errors('<div id="mensagem">','</div>');
          ?>
        </div>
        <form action="<?php echo base_url() ?>crud/logar_empresa" method="POST">
            <div class="container-input">
              <label for="email_user_empresa">Email</label>
              <input type="text" name="email_user_empresa"  id="login_user" placeholder="Email">
            </div>
            <div class="container-input">
              <label for="senha_user_empresa">Senha</label>
              <input type="password" name="senha_user_empresa"  id="Senha_login" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="<?php echo base_url() ?>pages/cadastro_empresa">Cadastre-se</a></strong></p>
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
        <?php
        echo validation_errors('<div id="mensagem">','</div>');
        ?>
      </div>
       <form id='login_motorista' action="<?php echo base_url() ?>crud/logar_veiculo" method="POST">
          <div class="mensagem" id="mensagem" ></div>
            <div class="container-input">
              <label for="email_user_veiculo">Placa</label>
              <input type="text" name="email_user_veiculo"  id="login_user" placeholder="Digite placa">
            </div>
            <div class="container-input">
              <label for="senha_user_veiculo">Senha</label>
              <input type="password" name="senha_user_veiculo"  id="Senha_placa" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="button" id="Entrar_motorista" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="<?php echo base_url() ?>pages/cadastro_veiculo/#veiculos">Cadastre-se</a></strong></p>
            </div>
      </form>
    </section>
</div>

    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
    <script type="text/javascript">
      executar_forms(url_app+'Auth_veiculo/authenticate_motorista','#Entrar_motorista','Auth_veiculo/acesso_veiculo','#login_motorista')
    </script>
  </body>
</html>
