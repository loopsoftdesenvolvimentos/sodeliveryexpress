<!DOCTYPE html>
<html>
  <?php include('componentes/head_frete_unico.inc'); ?>
  <body>
   <?php include('componentes/header.inc'); ?>
    <main>
      <?php 

        foreach ($dados_frete as $dados) {
          echo ' <section class="content container-frete-unico">
        <div class="container-frete-unico-titulo">
          <h1>Informações Frete</h1>
        </div>
          <div class="container-titulo">
            <ul>
              <li>Detalhes</li>
              <li>Visualizações <b>'.$dados->visualizações.'</b></li>
            </ul>
          </div>
          <div class="container-itens">
            <div>
              <ul>
                <li>Origem: <b>'.$dados->cidade_saida.'/'.$dados->uf_saida.'</b></li>
                <li>Destino: : <b>'.$dados->cidade_entrega.'/'.$dados->uf_entrega.'</b></li>
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
              <li><b>Produtos: </b>'.$dados->nome_produto.' / <b>Preço:</b> R$ '.$dados->preco_frete.',00</li>
              <li><span>Data:</span><DATA>'.$dados->data.'</DATA></li>
            </ul>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Veiculo</h1>
          </div>
          <div class="container-informaçõs-gerais-varios">
            <ul>
              <li><b>Veiculos </b>'.$dados->desc_veiculo_categoria.'</li>
              <li><b>Carroceria</b> '.$dados->desc_carroceria.'</li>
              <li><b>KM </b> '.$dados->km_total.'</li>
              <li><b>Espécie </b>'.$dados->desc_especie.'</li>
              <li><b>Complemento </b>'.$dados->complemento.'</li>
              <li><b>Rastreamento </b>'.$dados->rastreador.'</li>
              <li><b>Agenciamento </b>Não</li>
              <li><b>Obs:</b>'.$dados->informacoes_frete.'</li>
            </ul>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Contato</h1>
          </div>
          <div class="container-informaçõs-gerais-extras">
              <dl>
                <dt>Telefone</dt>
                <dd>'.$dados->telefone_comercial.'</dd>
              </dl>
              <dl>
                <dt>Celular</dt>
                <dd>'.$dados->celular.' - '.$dados->operadora.' ('.$dados->contato1.')</dd>
              </dl>
              <dl>
                <dt>Responsável</dt>
                <dd>'.$dados->contato_comercial.'</dd>
              </dl>
          </div>
          <div class="container-frete-unico-titulo">
              <h1>Empresa</h1>
          </div>
           <div class="container-titulo">
            <ul>
              <li><b>Empresa:  <b class="titulo_vermelho">'.$dados->nome_fantasia.'</b></b></li>
            </ul>
          </div>
          <div>
             <div class="container-informações-empresa">
              <div class="logo-empresa">
                 <img src="'.base_url().''.$dados->foto_empresa.'" alt="logo Só Delivery">
              </div>
              <div class="container-informações-empresa-itens">
            <div>
              <ul>
                <li><b>Cidade </b>'.$dados->nome_cidade.' /'.$dados->sigla_estads.'</li>
                <li><b>Site </b> '.$dados->site.'</li>
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
                <form action="'.base_url().'pages/email" method="post">
                   <div class="container-cadastro-input-dupla">
                    <div class="container-cadastro-input">
                      <label for="nome">Seu Nome:</label>
                      <input type="text" id="nome" name="nome">
                    </div>
                     <div class="container-cadastro-input">
                      <label for="email">Seu Email:</label>
                      <input type="text" id="email" name="email">
                    </div>
                  </div>
                  <div class="container-cadastro-input-dupla">
                    <div class="container-cadastro-input">
                      <label for="email_empresa">Email empresa:</label>
                      <input type="text" id="email_empresa" name="email_empresa" value="'.$dados->email.'">
                    </div>
                     <div class="container-cadastro-input">
                      <label for="empresa">Empresa:</label>
                      <input type="text" id="empresa" name="empresa" value='.$dados->nome_fantasia.'>
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
      </section>';
        }

       ?>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
*