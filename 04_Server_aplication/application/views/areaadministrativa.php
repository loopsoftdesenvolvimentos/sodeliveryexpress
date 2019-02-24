<!DOCTYPE html>
<html>
  <?php include('componentes/head_administrativo_areaadministrativa.inc'); ?>
  <body>
    <?php include('componentes/header_administrativo_areas.inc'); ?>
    <main>
      <div class="clear"></div>
      <div id="editarEmpresa" class="cadastro-veiculo-form content">
        <div class="container-cadastro-titulo titulo-primario titulo-primario_area">
          <h1>Área Administrativa</h1>
        </div>
        <form action="" method="put">
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
              <h1>Editar Empresa</h1>
            </div>
            <div class="container-cadastro-input">
              <label for="razao_social">Razão Social</label>
              <textarea name="razao_social" rows="8" cols="20"></textarea>
            </div>
            <div class="container-cadastro-input">
              <label for="cnpj">CNPJ</label>
              <input type="text" name="cnpj">
            </div>
            <div class="container-cadastro-input">
              <label for="email">E-mail</label>
              <input type="text" name="email">
            </div>
            <div class="container-cadastro-input">
              <label for="endereco">Endereço</label>
              <input type="text" name="endereco">
            </div>
            <div class="container-cadastro-input">
              <label for="endereco">Endereço</label>
              <input type="text" name="endereco">
            </div>
            <div class="container-cadastro-input">
              <label for="bairro">Bairro</label>
              <input type="text" name="bairro">
            </div>
            <div class="container-cadastro-input">
              <label for="complemento">Complemento</label>
              <input type="text" name="complemento">
            </div>
            <div class="container-cadastro-input">
              <label for="nome_fantasia">Nome Fantasia</label>
              <input type="text" name="complemento">
            </div>
            <div class="container-cadastro-input">
              <label for="inscricao_estadual">Inscrição Estadual</label>
              <input type="text" name="inscricao_estadual">
            </div>
            <div class="container-cadastro-input">
              <label for="cep">CEP</label>
              <input type="number" name="cep">
            </div>
            <div class="container-cadastro-input">
              <label for="foto_empresa">Foto da Empresa</label>
              <input type="file" name="foto_empresa">
            </div>
            <div class="container-cadastro-input">
              <label for="site">Site</label>
              <input type="text" name="site">
            </div>
            <div class="container-cadastro-input">
              <label for="skype">Skype</label>
              <input type="file" name="skype">
            </div>
            <div class="container-cadastro-input">
              <label for="nextel">Nextel</label>
              <input type="file" name="nextel">
            </div>
            <div class="container-cadastro-input">
              <label for="fax">Fax</label>
              <input type="file" name="fax">
            </div>
            <div class="container-cadastro-input">
              <label for="url_facebook_empresa">Url do Facebook Principal</label>
              <input type="text" name="url_facebook_empresa">
            </div>
            <div class="container-cadastro-input">
              <label for="url_facebook_um">Url do Facebook 1</label>
              <input type="text" name="url_facebook_um">
            </div>
            <div class="container-cadastro-input">
              <label for="url_facebook_dois">Url do Facebook 2</label>
              <input type="text" name="url_facebook_dois">
            </div>
            <div class="container-cadastro-input">
              <label for="url_facebook_tres">Url do Facebook 3</label>
              <input type="text" name="url_facebook_tres">
            </div>
            <div class="container-cadastro-input">
              <label for="contato">Contato</label>
              <input type="text" name="contato">
            </div>
            <div class="container-cadastro-input">
              <label for="contato_dois">Contato 2</label>
              <input type="text" name="contato_dois">
            </div>
            <div class="container-cadastro-input">
              <label for="contato_tres">Contato 3</label>
              <input type="text" name="contato_tres">
            </div>
            <div class="container-cadastro-input">
              <label for="contato_comercial">Contato Comercial</label>
              <input type="text" name="contato_comercial">
            </div>
            <div class="container-cadastro-input">
              <label for="telefone_comercial">Telefone Comercial</label>
              <input type="text" name="telefone_comercial">
            </div>
            <div class="container-cadastro-input">
              <label for="celular">Celular</label>
              <input type="text" name="celular">
            </div>
            <div class="container-cadastro-input">
              <label for="operadora">Operadora</label>
              <input type="text" name="operadora">
            </div>
            <div class="container-cadastro-input">
              <label for="whatsapp">WhatsApp</label>
              <input type="text" name="whatsapp">
            </div>
            <div class="container-cadastro-input">
              <div class="row">
                <div class="container-cadastro-input">
                  <label for="estado">Estado</label>
                  <select name="estado">
                    <option disabled selected>Selecione o estado</option>
                  </select>
                </div>
                <div class="container-cadastro-input">
                  <label for="cidade">Cidade</label>
                  <select name="cidade">
                    <option disabled selected>Selecione a cidade</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="container-cadastro-input">
              <label for="ramo">Ramo</label>
              <select name="ramo">
                <option disabled selected>Selecione o ramo</option>
              </select>
            </div>
            <div class="container-cadastro-input-submit">
              <input type="submit" value="Editar empresa">
            </div>
          </div>
        </form>
      </div>
      <div class="clear"></div>
      <div id="verEditaPagamento" class="content">
        <div class="img_titulo">
          <img src="<?php echo base_url()?>public/img/letras/pagamento_adm.svg" alt="titulo chart">
        </div>
        <div class="area3">
          <div class="area-container">
            <div class="container">
              <div class="infors-pagamento">
                <img src="<?php echo base_url()?>public/img/icons/pay.svg" alt="icons">
                <p>Valor: R$: 00,00</p>
              </div>
              <div class="infors-pagamento">
                <img src="<?php echo base_url()?>public/img/icons/vencimento.svg" alt="icons">
                <p>Vencimento: 00/00/0000</p>
              </div>
            </div>

            <div class="container">
              <a href="#">
                <img src="<?php echo base_url()?>public/img/icons/verEditarPagamentoADM.png">
                Gerar Boleto
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
