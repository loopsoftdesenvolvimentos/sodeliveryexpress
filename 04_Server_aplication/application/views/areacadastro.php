
<!DOCTYPE html>
<html>
    <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>
       <div id="cadastramentoVeiculo" class="cadastro-veiculo-form content">
          <form id="cadastro">
            <div class="mensagem" id="mensagem">
                 <p></p> 
            </div>
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Cadastrar Veiculo</h1>
              </div>
                <div class="container-cadastro-input">
                    <label for="placa_veiculo">Placa</label>
                    <input type="text" id="placa_veiculo" name="placa_veiculo">
                </div>
                <div id="sumir">
                <div class="container-cadastro-input">
                    <label for="nome_proprietario">Nome proprietário</label>
                    <input type="text" id="nome_proprietario" name="nome_proprietario">
                </div>

                <div class="container-cadastro-input">
                    <label for="Estados">Estados/Pais</label>
                    <select id="Estados" name="Estados">
                      <option>Selecionar Estados</option>
                      <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->nome_estado.'</option>' ;
                        } ?>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Cidade">Cidade</label>
                    <select id="Cidade" name="Cidade">
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
                    <label for="contato">Contato</label>
                    <input type="text" id="contato" name="contato">
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
                    <?php 
                      foreach ($categoria_veiculos as $value) {
                        echo '<option value='.$value->id_veiculo_categoria.'>'.$value->desc_veiculo_categoria.'</option>';
                      }
                     ?>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="carroceria_veiculo">Carroceria</label>
                    <select id="carroceria_veiculo" name="carroceria_veiculo">
                      <option>Selecionar carroceria</option>
                      <?php 
                      foreach ($carrocerias as $value) {
                        echo '<option value='.$value->id_carroceria.'>'.$value->desc_carroceria.'</option>';
                      }
                     ?>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="Rastreador">Rastreador</label>
                    <select id="Rastreador" name="Rastreador">
                      <option value="Não">Não</option>
                       <option value="Sim">Sim</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="Marca">Marca</label>
                    <select id="Marca" name="Marca">
                      <option>Selecionar marca</option>
                      <?php 
                      foreach ($marcas as $value) {
                        echo '<option value='.$value->id_marca.'>'.$value->desc_marca.'</option>';
                      }
                     ?>
                    </select>
                </div>

                 <div class="container-cadastro-input">
                    <label for="Ano">Ano</label>
                    <select id="Ano" name="Ano">
                      <option>Selecionar Ano</option>
                      <?php 
                        $ano = date('o');
                        for ($i=1990; $i <=$ano ; $i++) { 
                          echo '<option value='.$i.'>'.$i.'</option>';
                        }

                       ?>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="RNTRC">RNTRC</label>
                    <input type="text" id="RNTRC" name="RNTRC">
                </div>
                 <div class="container-cadastro-input">
                    <label for="permissao">Permissionado (trafegar no Mercosul)</label>
                    <select id="permissao" name="permissao">
                      <option value="Não">Não</option>
                       <option value="Sim">Sim</option>
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
                    <input type="button" value="Finalizar" id="Finalizar">
                </div>
              </div>
                 <div class="container-cadastro-input-submit">
                    <input type="button" id='Prosseguir' value="Prosseguir">
                </div>

          </div>
        </div>
        </form>
       </div>
    </main>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
  <script type="text/javascript">
    executar_forms(url_app + 'crud/cadastrar_veiculo','#Finalizar','/pages/login','#cadastro');
    pesquisar_placa('#Prosseguir','#Prosseguir');
    select_populado_simples('select[name="Estados"]','select[name="Cidade"]');
  </script>
  </body>
</html>
