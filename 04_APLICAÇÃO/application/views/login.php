<!DOCTYPE html>
<html>
   <?php include('componentes/head_login.inc'); ?>
  <body>
    <div class="container">
      <div class="tab_header">
        <ul class="tabs">
            <li class="trocar_display tab_header2" data-tab="Assinantecontent">Central Assinante</li>
            <li class="trocar_display" data-tab="Veiculocontent">Veiculo</li>
        </ul>
      </div>
      <section id="Assinantecontent" class="tirar_display trocar_display"> 
        <form action="/logar" method="post">
            <div class="container-input">
              <label for="login_user">Login</label>
              <input type="text" name="login_user"  id="login_user" placeholder="Login">
            </div>
            <div class="container-input">
              <label for="Senha_login">Senha</label>
              <input type="text" name="Senha_login"  id="Senha_login" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="empresa/cadastro">Cadastre-se</a></strong></p>
            </div>
      </form>
    </section>
    <section id="Veiculocontent" class="tirar_display ">
       <form action="/logar" method="post" >
            <div class="container-input">
              <label for="Placa_placa">Placa</label>
              <input type="text" name="login_user"  id="login_user" placeholder="Digite placa">
            </div>
            <div class="container-input">
              <label for="Senha_placa">Senha</label>
              <input type="text" name="Senha_placa"  id="Senha_placa" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="veiculo_cadastro_verificar.html">Cadastre-se</a></strong></p>
            </div>
          </div>
      </form>
    </section>

  </body>
</html>
