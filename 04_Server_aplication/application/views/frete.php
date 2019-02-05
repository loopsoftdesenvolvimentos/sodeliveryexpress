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
                  <div class="container-empresa-inputs">
                      <label>Origem:</label>
                      <select name="Origem">
                        <option selected disabled>Selecione o Estado</option>
                         <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->sigla_estads.'</option>' ;
                        } ?>
                      </select>
                  </div>
                  <div class="container-empresa-inputs " id="sumir">
                      <label>Cidades:</label>
                      <select name="cidades">
                        <option selected disabled>Selecionar cidade</option>
                      </select>
                  </div>
                  <div class="container-empresa-inputs">
                      <label>Destino:</label>

                      <select name="Destino">
                        <optgroup label="Região">
                        <option value="Sudeste">Sudeste</option>
                        <option value="Sul">Sul</option>
                        <option value="Centro-oeste">Centro-oeste</option>
                        <option value="Nordeste">Nordeste</option>
                        <option value="Norte">Norte</option>
                      </optgroup>
                      <optgroup label="Estados">
                        <option selected disabled>Selecione o Estado</option>
                         <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->sigla_estads.'</option>' ;
                        } ?>
                      </select>
                    </optgroup>
                  </div>
                  <div class="container-empresa-inputs " id="sumir1">
                      <label>Destino cidade:</label>
                      <select name="Destino_cidades">
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
                      <ul>
                        <?php 
                        foreach ($categoria_veiculos as $categorias) {
                          if ($categorias->desc_categoria == 'Pesados') {
                            echo "<li><a href='".base_url()."fretes/categoria/".$categorias->desc_veiculo_categoria."'>".$categorias->desc_veiculo_categoria."</a></li>";
                          } 
                        }
                     ?>
                      </ul>
                    </details>
                    <details>
                      <summary>Médios</summary>
                      <ul>
                        <?php 
                        foreach ($categoria_veiculos as $categorias) {
                          if ($categorias->desc_categoria == 'Medios') {
                            echo "<li><a href='".base_url()."fretes/categoria/".$categorias->desc_veiculo_categoria."'>".$categorias->desc_veiculo_categoria."</a></li>";
                          } 
                        }
                     ?>
                      </ul>
                    </details>
                    <details>
                      <summary>Leves</summary>
                      <ul>
                        <?php 
                        foreach ($categoria_veiculos as $categorias) {
                          if ($categorias->desc_categoria == 'Leves') {
                            echo "<li><a href=''>".$categorias->desc_veiculo_categoria."</a></li>";
                          } 
                        }
                     ?>
                      </ul>
                    </details>
                  </div>
                </div>
                  <div class="container-empresa-filtro">
                  <div class="container-empresa-titulo-2">
                    <h1>Complemento</h1>
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
                      <?php 

                          foreach ($carroceria as $carroceria_item) {
                            echo '<li><a href=""> '.$carroceria_item->desc_carroceria.' <b>0</b></a></li>';
                          }
                       ?>
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
                
                <?php 
                  if(count($fretes) > 0){
                    foreach ($fretes as $container_fretes) {
                      echo'<section class="item-frete-empresa-veiculo">
                       <div class="img-empresa">
                        <img src="<?php echo base_url()?>public/img/empresas/'.$container_fretes->foto_empresa.'">
                        </div>
                        <div class="informações-item">
                          <div >
                            <ul>
                              <li><a href="frete_unico.html">Origem: <b>'.$container_fretes->Cidade_saida.'</b></a></li>
                              <li>Preço: '.$container_fretes->preco_frete.'</li>
                              <li>Veiculo: '.$container_fretes->desc_veiculo_categoria.'</li>
                              <li>Espécie em: '.$container_fretes->desc_especie.'</li>
                            </ul>
                          </div>
                          <div class="secondary-item">
                            <ul>
                              <li><a href="frete_unico.html">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
                              <li>Produtos:'.$container_fretes->nome_produto.'</li>
                            </ul>
                          </div>
                        </div>
                            <div class="info-extra">
                                <p>KM: 197 - Obs: '.$container_fretes->informacoes_frete.'</p>
                            </div>
                      </section>';
                    }
                  }else{
                    echo'Não há frete cadastrados';
                  }
                 ?>   
             </section>
            </section>
            <div class="clear"></div>
            <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc') ?>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/pesquisa.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
  </body>
</html>
