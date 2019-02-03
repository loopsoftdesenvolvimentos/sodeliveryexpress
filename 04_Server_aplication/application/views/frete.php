<!DOCTYPE html>
<html>
  <?php include('componentes/head_frete.inc') ?>
  <body>
   <?php include('componentes/header.inc') ?>
    <main>
        <div class="fundo"></div>
        <section class="container-empresa content">
          <div id="btn-filter" class="mobile-menu mobile">
            <img src="<?php echo base_url()?>public/img/icons/filter.svg" alt="filtro de buscas para mobile">
          </div>
            <section id="filtro" class="container-menu none">
              <div class="container-empresa-filtro">
                 <a href="login.html"> <button>Cadastrar Frete</button></a>
              </div>
                <div class="container-empresa-titulo">
                    <h1>Filtros</h1>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-inputs">
                      <label>Origem:</label>
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
                    <h1>Veículos</h1>
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
                    <img src="<?php echo base_url()?>public/img/letras/fretes.svg">
                </section>
                
                
                <section class="item-frete-empresa-veiculo">
                     <div class="img-empresa">
                      <img src="<?php echo base_url()?>public/img/logo.png">
                  </div>
                  <div class="informações-item">
                    <div >
                      <ul>
                        <li><a href="frete_unico.html">Origem: <b>São Paulo - SP</b></a></li>
                        <li>Preço: A Combinar</li>
                        <li>Veiculo: Truck</li>
                        <li>Carregar em: Posto da base</li>
                      </ul>
                    </div>
                    <div class="secondary-item">
                      <ul>
                        <li><a href="frete_unico.html">Destino: <b>Rio de Janeiro - RJ</b></a></li>
                        <li>Produtos:Gramas</li>
                        <li>Espécie: Unidades</li>
                        <li>Obs: tomar cuidado pela carga</li>
                      </ul>
                    </div>
                  </div>
                      <div class="info-extra">
                          <p>KM: 197</p>
                      </div>
                </section>
              </section>
            </section>
            <div class="clear"></div>
            <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc') ?>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="public/js/pesquisa.js"></script>
  </body>
</html>
