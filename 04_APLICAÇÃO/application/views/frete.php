<!DOCTYPE html>
<html>
  <?php 
      include('componentes/head_frete.inc');
   ?>
  <body>
    <?php 
      include('componentes/header.inc');
     ?>
    <main >
        <div class="fundo">
          <img src="public/img/truck-frete.jpg">
        </div>
        <section class="container-empresa content">
            <section class="container-menu">
              <div class="container-empresa-filtro">
                 <a href="administrativo"> <button>Cadastrar Frete</button></a>
              </div>
                <div class="container-empresa-titulo">
                    <h1>Filtros</h1>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-inputs">
                      <label>Origem</label>
                      <select>
                        <option>Selecionar opção</option>
                      </select>
                  </div>
                  <div class="container-empresa-inputs">
                      <label>Destino:</label>
                      <select>
                        <option>Selecionar opção</option>
                      </select>
                  </div>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Veiculos</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <details>
                      <summary>Pesados</summary>
                    </details>
                    <details>
                      <summary>Médios</summary>
                    </details>
                    <details>
                      <summary>Leves</summary>
                    </details>
                  </div>
                </div>
                  <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Complemento</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <details>
                      <summary>Sim</summary>
                    </details>
                  </div>
                </div>
                 <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Raio (Distancia)</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <ul>
                      <li><a href=""> 50KM</a></li>
                       <li><a href="">100KM</a></li>
                       <li><a href="">200KM</a></li>
                    </ul>
                  </div>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Rastreador</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <ul>
                      <li><a href=""> Sim <b>1000</b></a></li>
                       <li><a href="">Não <b>876</b></a></li>
                    </ul>
                  </div>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Carroceria</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <ul>
                      <li><a href=""> Baú <b>2808</b></a></li>
                    </ul>
                  </div>
                </div>
              <div class="container-empresa-filtro">
                    <div class="container-empresa-titulo-2">
                      <h1>Faixa de  Preço</h1>
                    </div>
                    <div class="container-empresa-inputs">
                    <div>
                      <label class="container-checkbox">A Combinar
                        <input type="checkbox" value='A Combinar'>
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox">Até R$ 2500
                        <input type="checkbox" value='2500'>
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox">R$ 2500 a R$5000
                        <input type="checkbox" value='5000'>
                        <span class="checkmark"></span>
                      </label>
                      <label class="container-checkbox">acima de R$ 5000
                        <input type="checkbox" value='5000'>
                        <span class="checkmark"></span>
                      </label>
                    </div>
                  </div>  
                  </div>
              </section>
              <section class="container-content-fretes-empresas-veiculos">
                <section class="img_titulo">
                    <img src="public/img/logoVeículos.png">
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="public/img/logo.png">
                  </div>
                  <div class="informações-item">
                      <div >
                        <ul>
                          <li>Origem:<b>Dourados - MS</b></li>
                          <li>Preço: A Combinar</li>
                          <li>Veiculo: Truck</li>
                          <li>Carregar em: Posto da base</li>
                        </ul>
                      </div>
                      <div c>
                        <ul>
                          <li>Destino: <b>Bar da preta - MS</b></li>
                          <li>Produtos: Gramas</li>
                          <li>Espécie: Paletes</li>
                        </ul>
                      </div>
                  </div>
                </section>
              </section>
            </section>
    </main>
    <?php 
      include('componentes/footer.inc');
     ?>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="public/js/pesquisa.js"></script>
  </body>
</html>