<?php

  // $route['empresas#cadastramentoVeiculos'];

?>
<!DOCTYPE html>
<html>
    <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>
       <div id="cadastramentoVeiculo" class="cadastro-veiculo-form content">
          <form action="" method="post">
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Cadastrar Veiculo</h1>
              </div>
                <div class="container-cadastro-input">
                    <label for="placa_veiculo">Placa</label>
                    <input type="text" id="placa_veiculo" name="placa_veiculo">
                </div>
                <div class="container-cadastro-input">
                    <label for="nome_proprietario">Nome proprietário</label>
                    <input type="text" id="nome_proprietario" name="nome_proprietario">
                </div>

                <div class="container-cadastro-input">
                    <label for="Estados">Estados/Pais</label>
                    <select id="Estados" name="Estados">
                      <option>Selecionar Estados</option>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Cidade">Cidade</label>
                    <select id="carroceria_veiculo" name="Cidade">
                      <option>Selecionar Cidade</option>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email">
                </div>
                  <div class="container-cadastro-titulo">
                    <h1>Contato</h1>
                 </div>
                  <div class="container-cadastro-input">
                    <label for="telefone1">Telefone</label>
                    <input type="text" id="telefone1" name="telefone1">
                </div>
                 <div class="container-cadastro-input">
                    <label for="Tipo">Tipo</label>
                    <select id="Tipo" name="Tipo">
                      <option>Selecionar tipo</option>
                      <option>Fixo</option>
                      <option>Celular</option>
                      <option>WhatsApp</option>
                    </select>
                </div>
                 <div class="container-cadastro-titulo">
                    <h1>Veiculo</h1>
                 </div>
                 <div class="container-cadastro-input">
                    <label for="Veiculo">Veiculo</label>
                    <select id="Veiculo" name="Veiculo">
                      <option>Veiculo</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="carroceria_veiculo">Carroceria</label>
                    <select id="carroceria_veiculo" name="carroceria_veiculo">
                      <option>Selecionar carroceria</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="Rastreador">Rastreador</label>
                    <select id="Rastreador" name="Rastreador">
                      <option>Não</option>
                       <option>Sim</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="Marca">Marca</label>
                    <select id="Marca" name="Marca">
                      <option>Selecionar marca</option>
                    </select>
                </div>

                 <div class="container-cadastro-input">
                    <label for="Ano">Ano</label>
                    <select id="Ano" name="Ano">
                      <option>Selecionar Ano</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="RNTRC">RNTRC</label>
                    <input type="number" id="RNTRC" name="RNTRC ">
                </div>
                 <div class="container-cadastro-input">
                    <label for="permissao">Permissionado (trafegar no Mercosul)</label>
                    <select id="permissao" name="Rastreador">
                      <option>Não</option>
                       <option>Sim</option>
                    </select>
                </div>
                <div class="container-cadastro-titulo">
                    <h1>Autentificação</h1>
                 </div>
                  <div class="container-cadastro-input">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha">
                </div>
                 <div class="container-cadastro-input">
                    <label for="confirmar_senha">Confirmar senha</label>
                    <input type="number" id="confirmar_senha" name="confirmar_senha">
                </div>
                <div class="container-cadastro-input-submit">
                    <input type="submit" value="Prosseguir">
                </div>
          </div>
        </form>
       </div>
    </main>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  </body>
</html>
