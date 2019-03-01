<!DOCTYPE html>
<html>
    <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>
       <div class="cadastro-veiculo-form content">
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
                    <input type="text" id="placa_veiculo" name="placa_veiculo" value="<?php echo $motorista[0]->placa_veiculo ?>">
                </div>
                <div class="container-cadastro-input">
                    <label for="nome_proprietario">Nome proprietário</label>
                    <input type="text" id="nome_proprietario" name="nome_proprietario" value="<?php echo $motorista[0]->nome_proprietario ?>">
                </div>

                <div class="container-cadastro-input">
                    <label for="Estados">Estados/Pais</label>
                    <select id="Estados" name="Estados">
                      <option value="<?php echo $motorista[0]->id_estado ?>" checked><?php echo $motorista[0]->nome_estado ?></option>
                       <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->nome_estado.'</option>' ;
                        } ?>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Cidade">Cidade</label>
                    <select id="Cidade" name="Cidade">
                      <option  value="<?php echo $motorista[0]->id_cidade ?>" checked> <?php echo $motorista[0]->nome_cidade ?></option>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" value="<?php echo $motorista[0]->email ?>">
                </div>
                <div class="container-cadastro-input">
                    <label for="Endereço">Endereço</label>
                    <input type="text" id="Endereço" name="Endereço" value="<?php echo $motorista[0]->endereco ?>">
                </div>
                <?php
                    if($motorista[0]->data_nascimento == null){
                      echo '<div class="container-cadastro-input">
                                <label for="nascimento">Data nascimento:</label>
                                <input type="date" id="nascimento" name="nascimento">
                             </div>';
                    }else{
                      echo '<div class="container-cadastro-input">
                                <label for="nascimento">Data nascimento:</label>
                                <input type="text" id="nascimento" name="nascimento" value=" '.$motorista[0]->data_nascimento.' ">
                             </div>';
                    }
                 ?>

                  <div class="container-cadastro-titulo">
                    <h1>Contato</h1>
                 </div>
                  <div class="container-cadastro-input">
                    <label for="telefone1">Telefone</label>
                    <input type="text" id="telefone1" name="telefone1" value="<?php echo $motorista[0]->telefone ?>">
                </div>
                 <div class="container-cadastro-input">
                    <label for="contato">Contato</label>
                    <input type="text" id="contato" name="contato" value="<?php echo $motorista[0]->contato ?>">
                </div>
                 <div class="container-cadastro-input">
                    <label for="Tipo">Tipo</label>
                    <select id="Tipo" name="Tipo">
                      <option value="<?php echo $motorista[0]->tipo ?>" checked><?php echo $motorista[0]->tipo ?></option>
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
                       <option value="<?php echo $motorista[0]->id_veiculo_categoria ?>" checked><?php echo $motorista[0]->desc_veiculo_categoria ?></option>
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
                       <option value="<?php echo $motorista[0]->id_carroceria ?>" checked><?php echo $motorista[0]->desc_carroceria ?></option>
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
                     <option value="<?php echo $motorista[0]->rastreador ?>" checked><?php echo $motorista[0]->rastreador ?></option>
                      <option>Não</option>
                       <option>Sim</option>
                    </select>
                </div>
                 <div class="container-cadastro-input">
                    <label for="Marca">Marca</label>
                    <select id="Marca" name="Marca">
                       <option value="<?php echo $motorista[0]->id_marca ?>" checked><?php echo $motorista[0]->desc_marca ?></option>
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
                       <option value="<?php echo $motorista[0]->ano ?>" checked><?php echo $motorista[0]->ano ?></option>
                       <?php
                        $ano = date('o');
                        for ($i=1990; $i <=$ano ; $i++) {
                          echo '<option value='.$i.'>'.$i.'</option>';
                        }

                       ?>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Modelo">Modelo</label>
                    <input type="text" id="Modelo" name="Modelo"  value="<?php echo $motorista[0]->modelo ?>" >
                </div>

                <div class="container-cadastro-input">
                    <label for="Seguro">Seguro</label>
                    <input type="text" id="Seguro" name="Seguro"  value="<?php echo $motorista[0]->seguro ?>" >
                </div>

                <div class="container-cadastro-input">
                    <label for="CNH">CNH</label>
                    <input type="text" id="CNH" name="CNH"  value="<?php echo $motorista[0]->cnh ?>" >
                </div>
                 <div class="container-cadastro-input">
                    <label for="RNTRC">RNTRC</label>
                    <input type="text" id="RNTRC" name="RNTRC"  value="<?php echo $motorista[0]->rntrc?>" >
                </div>
                 <div class="container-cadastro-input">
                    <label for="permissao">Permissionado (trafegar no Mercosul)</label>
                    <select id="permissao" name="permissao"  >
                      <option  value="<?php echo $motorista[0]->permissionado ?>" checked><?php echo $motorista[0]->permissionado ?></option>
                       <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
                <div class="container-cadastro-input-submit">
                    <input type="button" value="Prosseguir" id="Finalizar">
                </div>
          </div>
        </form>
       </div>
       <div class="clear"></div>
    </main>
    <?php include('componentes/footer.inc') ?>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
  <script type="text/javascript">
    executar_forms(url_app + 'Auth_veiculo/editar_dados_motorista','#Finalizar','Auth_veiculo/editar_dados','#cadastro');
  </script>
  </body>
</html>
