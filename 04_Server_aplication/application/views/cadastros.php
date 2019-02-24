<!DOCTYPE html>
<html>
  <?php include('componentes/head_cadastros.inc'); ?>
  <body>
   <?php include('componentes/header.inc'); ?>
    <main>
      <div class="container-cadastro content">
        <?php echo form_open_multipart('crud/cadastrar_empresa');?>
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo titulo-primario">
                <h1>Empresa</h1>
              </div>
                <div class="container-cadastro-input">
                    <label for="razao_social">Razão social</label>
                    <input type="text" id="razao_social" name="razao_social">
                </div>
                <div class="container-cadastro-input">
                    <label for="nome_fantasia">Nome Fantasia</label>
                    <input type="text" id="nome_fantasia" name="nome_fantasia">
                </div>

                <div class="container-cadastro-input">
                    <label for="cnpj">*CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj">
                </div>


                <div class="container-cadastro-input">
                    <label for="Inscriao_Estadual">Inscrição Estadual</label>
                    <input type="text" id="Inscriao_Estadual" name="Inscriao_Estadual">
                </div>

                <div class="container-cadastro-input">
                    <label>*Ramo da Empresa:</label>
                    <select name="ramo_empresa">
                      <option selected disabled>Selecione ramo</option>
                      <?php
                        foreach ($ramo as $ramos) {
                          echo "<option value=".$ramos->id_ramo.">".$ramos->desc_ramo."</option>";
                        }
                      ?>
                    </select>
                </div>
            </div>
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Localização</h1>
              </div>
                <div class="container-cadastro-input">
                    <label for="Paises">Paises</label>
                    <input type="text" id="Paises" name="Paises" value="Brasil">
                </div>
                <div class="container-cadastro-input">
                    <label for="Estados">Estados</label>
                    <select name="Estados">
                      <option selected>Selecione estado</option>
                      <?php
                        foreach ($estados as $estado) {
                          echo "<option value=".$estado->id_estado.">".$estado->nome_estado."</option>";
                        }
                      ?>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Cidade">Cidade</label>
                    <select id="Cidade" name="Cidade"></select>
                </div>
                <div class="container-cadastro-input">
                    <label for="CEP">CEP</label>
                    <input type="text" id="CEP" name="CEP">
                </div>
                <div  class="container-cadastro-input-dupla">
                    <div class="container-cadastro-input">
                        <label for="Endereço">Endereço</label>
                        <input type="text" id="Endereço" name="Endereço">
                    </div>
                    <div class="container-cadastro-input">
                        <label for="Bairro">Bairro</label>
                        <input type="text" id="Bairro" name="Bairro">
                    </div>
                </div>
                <div class="container-cadastro-input">
                    <label for="Complemento">Complemento</label>
                    <input type="text" id="Complemento" name="Complemento">
                </div>
           </div>
           <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Contato</h1>
              </div>
              <div class="container-cadastro-input">
                    <label for="Email">Email</label>
                    <input type="text" id="Email" name="Email">
              </div>
              <div class="container-cadastro-input-dupla">
                  <div class="container-cadastro-input">
                    <label for="Telefone_comercial">*Telefone Comercial</label>
                    <input type="text" id="Telefone_comercial" name="Telefone_comercial">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="contato_comercial">Contato comercial</label>
                    <input type="text" id="contato_comercial" name="contato_comercial">
                  </div>
              </div>
               <div class="container-cadastro-input-tripla">
                  <div class="container-cadastro-input">
                    <label for="Celular">Celular</label>
                    <input type="text" id="Celular" name="Celular">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="Operadora">Operadora:</label>
                    <select name="Operadora">
                        <option></option>
                        <option>Claro</option>
                        <option>Vivo</option>
                        <option>Tim</option>
                        <option>OI</option>
                        <option>Outra</option>
                    </select>
                  </div>
                  <div class="container-cadastro-input">
                    <label for="Contato1">Contato</label>
                    <input type="text" id="Contato1" name="Contato1">
                  </div>
              </div>
              <div class="container-cadastro-input">
                  <label for="Whatsapp">Whatsapp</label>
                  <input type="text" name="Whatsapp" id="Whatsapp">
              </div>
              <div class="container-cadastro-input-dupla">
                  <div class="container-cadastro-input">
                    <label for="Fax">Fax</label>
                    <input type="text" id="Fax" name="Fax">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="Nextel">Nextel</label>
                    <input type="text" id="Nextel" name="Nextel">
                  </div>
              </div>
                <div class="container-cadastro-input">
                    <label for="Skype">Skype</label>
                    <input type="text" id="Skype" name="Skype">
                </div>
                 <div class="container-cadastro-input">
                    <label for="Site">Site</label>
                    <input type="text" id="Site" name="Site" placeholder="http://">
                </div>
                 <div class="container-cadastro-input">
                    <label for="URL">URL do facebook da Empresa</label>
                    <input type="text" id="URL" name="URL">
                </div>
          </div>
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
                  <h1>Contatos</h1>
              </div>
               <div class="container-cadastro-input-dupla">
                  <div class="container-cadastro-input">
                    <label for="nome_contato1">Nome contato</label>
                    <input type="text" id="nome_contato1" name="nome_contato1">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="url_facebook1">URL do facebook</label>
                    <input type="text" id="url_facebook1" name="url_facebook1">
                  </div>
              </div>
              <div class="container-cadastro-input-dupla">
                  <div class="container-cadastro-input">
                    <label for="nome_contato2">Nome contato</label>
                    <input type="text" id="nome_contato2" name="nome_contato2">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="url_facebook2">URL do facebook</label>
                    <input type="text" id="url_facebook2" name="url_facebook2">
                  </div>
              </div>
               <div class="container-cadastro-input-dupla">
                  <div class="container-cadastro-input">
                    <label for="nome_contato3">Nome contato</label>
                    <input type="text" id="nome_contato3" name="nome_contato3">
                  </div>
                   <div class="container-cadastro-input">
                    <label for="url_facebook3">URL do facebook</label>
                    <input type="text" id="url_facebook3" name="url_facebook3">
                  </div>
              </div>
          </div>
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
                  <h1>Logotipo empresa</h1>
            </div>
            <div class="container-cadastro-input">
              <label for="client_name">Inserir imagem</label>
              <input type="file" name="client_name" id="client_name">
            </div>
          </div>
           <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
                 <h1>Dados de Autenticação</h1>
            </div>
            <div class="container-cadastro-input">
              <label for="email_autentificação">* E-mail para autenticação </label>
              <input type="text" name="email_autentificação" id="email_autentificação">
            </div>
            <div class="container-cadastro-input-dupla">
                <div class="container-cadastro-input">
                  <label for="senha">Senha </label>
                  <input type="password" name="senha" id="senha">
                </div>
                <div class="container-cadastro-input">
                  <label for="confirmar_senha">Confirmar senha </label>
                  <input type="password" name="confirmar_senha" id="confirmar_senha">
                </div>
            </div>
          </div>
          <div class="container-cadastro-input-button">
              <input type="submit" value="Confirmar cadastro">
          </div>
        </form>
        <form id="veiculos" class="" action="" method="post">
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo titulo-primario">
                <h1>Cadastrar Veiculo</h1>
            </div>
            <div class="content-cadastro">
              <div class="container-cadastro-input">
                <label for="placa_veiculo">Placa</label>
                <input type="text" id="placa_veiculo" name="placa_veiculo">
              </div>
              <div class="container-cadastro-input">
                <label for="nome_proprietario">Nome Motorista</label>
                <input type="text" id="nome_proprietario" name="nome_proprietario">
              </div>
              <div class="container-cadastro-input">
                <label for="email">E-mail Motorista</label>
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
              <div class="container-cadastro-input-button">
                  <input type="submit" value="Confirmar cadastro">
              </div>
            </div>
        </div>
        </form>
         <?php
           echo validation_errors('<div id="mensagem">','</div>');
          ?>
      </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>

  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/cep.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/select_populado.js"></script>
  <script type="text/javascript">
    select_populado_simples('select[name="Estados"]','select[name="Cidade"]');
  </script>
  </body>
</html>
