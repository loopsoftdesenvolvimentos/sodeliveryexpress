<!DOCTYPE html>
<html>
  <?php include('componentes/head_empresa.inc') ?>
  <body>
    <?php include('componentes/header.inc') ?>
    <main >
        <div class="fundo"></div>
        <section class="container-empresa content">
          <div id="btn-filter" class="mobile-menu mobile">
            <img src="public/img/icons/filter.svg" alt="filtro de buscas para mobile">
          </div>
            <section id="filtro" class="container-menu none">
              <div class="container-empresa-filtro">
                 <a href="cadastros.html"> <button>Cadastrar Empresa</button></a>
              </div>
                <div class="container-empresa-titulo">
                    <h1>Filtros</h1>
                </div>
                <div class="filtros_selecionados">
                  <ul id="lista">
                    <?php   
                        if(isset($pesquisas)){
                          foreach($pesquisas as $key=>$selecionados) {
                            echo "<li><a href='".base_url()."fretes/remover/".$key."'>".$selecionados['pesquisa']."<b>X</b></a></li>";
                          }
                        }
                     ?> 
                   </ul>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Buscar por Nome</h1>
                  </div>
                  <div class="container-empresa-inputs">
                      <input type="text" name="seach" placeholder="Digite o nome da empresa">
                   </div>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-inputs">
                      <label>UF:</label>
                      <select name="estado_empresa">
                         <option selected disabled>Selecione estado</option>
                         <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->sigla_estads.'</option>' ;
                        } ?>
                      </select>
                  </div>
                  <div class="container-empresa-inputs">
                      <label>Cidade:</label>
                      <select name="cidades_empresas"></select>
                  </div>
                </div>
                <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Ramo</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <ul>
                      <li><a href="">Transportadora <b>10</b></a></li>
                       <li><a href="">Embarcadora <b>10</b></a></li>
                       <li><a href="">Agenciadora <b>10</b></a></li>
                    </ul>
                  </div>
                </div>
                  <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Raio(Distancia)</h1>
                  </div>
                  <div class="container-empresa-filtro-espaco">
                    <ul>
                      <li><a href=""> 50KM</a></li>
                       <li><a href="">100KM</a></li>
                       <li><a href="">200KM</a></li>
                    </ul>
                  </div>
                </div>
              </section>
              <section class="container-content-fretes-empresas-veiculos">
                <section class="img_titulo">
                    <img src="public/img/letras/empresa.svg">
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
                      <div >
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
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc') ?>
  <!-- SCRIPTS -->
<<<<<<< HEAD
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/pesquisa.js"></script>
=======
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="public/js/pesquisa.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
>>>>>>> 9dc2bb0206db5732b27c8fedeffeef04ba8c6e0f
  </body>
</html>
