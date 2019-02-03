<!DOCTYPE html>
<html>
  <?php include('componentes/head_frete_unico.inc'); ?>
  <body>
   <?php include('componentes/header.inc'); ?>
    <main>
      <section class="content container-frete-unico">
        <div class="container-frete-unico-titulo">
          <h1>Informações Frete</h1>
        </div>
          <div class="container-titulo">
            <ul>
              <li>Detalhes</li>
              <li>Visualizações <b>0</b></li>
            </ul>
          </div>
          <div class="container-itens">
            <div>
              <ul>
                <li>Origem: <b>Diamantino/MT</b></li>
                <li>Destino: <b>Diamantino/MT</b></li>
              </ul>
            </div>
            <div>
              <div class="container-button">
                <button>Ver Rota</button>
              </div>
            </div>
          </div>
           <div class="container-frete-unico-titulo">
              <h1>Produto</h1>
          </div>
          <div class="container-informaçõs-gerais">
            <ul>
              <li><b>Produtos: </b>SOJA EM GRÃOS / <b>Preço:</b> A Combinar</li>
              <li><span>Data:</span><DATA>02/02/2019</DATA></li>
            </ul>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Veiculo</h1>
          </div>
          <div class="container-informaçõs-gerais-varios">
            <ul>
              <li><b>Veiculos </b>Rodotrem,Vanderleia,Bitrem,Carretas LS</li>
              <li><b>Carroceria</b> Caçamba,Graneleiro</li>
              <li><b>KM</b> 715</li>
              <li><b>Espécie</b>Granel</li>
              <li><b>Complemento </b>Não</li>
              <li><b>Rastreamento </b>Não</li>
              <li><b>Agenciamento </b>Não</li>
              <li><b>Obs:</b>Carga perigosa</li>
            </ul>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Contato</h1>
          </div>
          <div class="container-informaçõs-gerais-extras">
              <dl>
                <dt>Telefone</dt>
                <dd>(00)4567-9865 (Matriz)</dd>
                <dd>(00)4567-9865 (Dourados)</dd>
              </dl>
              <dl>
                <dt>Celular</dt>
                <dd>(00)4567-9865 - TIM (Marcos)</dd>
              </dl>
              <dl>
                <dt>Responsável</dt>
                <dd>Marcos Lopes</dd>
              </dl>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Empresa</h1>
          </div>
           <div class="container-titulo">
            <ul>
              <li><b>Empresa:  <b class="titulo_vermelho">Fulano Transportes</b></b></li>
            </ul>
          </div>
          <div>
             <div class="container-informações-empresa">
              <div class="logo-empresa">
                 <img src="public/img/logo.png" alt="logo Só Delivery">
              </div>
              <div class="container-informações-empresa-itens">
            <div>
              <ul>
                <li><b>Cidade </b>Campo-Grande / MS</li>
                <li><b>Site </b>  www.algumacoisa.com.br</li>
              </ul>
            </div>
            <div>
              <div class="container-button">
                <button>Veja nossa empresa</button>
              </div>
            </div>
          </div>
            </div>
            <div class="container-frete-unico-titulo">
              <h1>Entre em contato com nosso empresa</h1>
              <div class="form_contato">
                <form>
                   <div class="container-cadastro-input-dupla">
                    <div class="container-cadastro-input">
                      <label for="nome">Seu Email:</label>
                      <input type="text" id="nome" name="nome">
                    </div>
                     <div class="container-cadastro-input">
                      <label for="email">Seu Email:</label>
                      <input type="text" id="email" name="email">
                    </div>
                  </div>
                  <div class="container-cadastro-input">
                      <label for="mensagem">Sua Mensagem:</label>
                      <input type="text" id="mensagem" name="mensagem">
                  </div>
                   <div class="container-cadastro-input-button">
                      <input type="submit"  value="Enviar">
                  </div>
                </form>
              </div>
          </div>
          </div>
      </section>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
