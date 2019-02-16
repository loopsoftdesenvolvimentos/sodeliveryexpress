
<!DOCTYPE html>
<html>
  <?php include('componentes/head_empresa.inc') ?>
  <body>
    <?php include('componentes/header.inc') ?>
    <main >
        <div class="fundo"></div>
        <section class="container-empresa content">
          <div id="btn-filter" class="mobile-menu mobile">
            <img src="<?php echo base_url()?>public/img/icons/filter.svg" alt="filtro de buscas para mobile">
          </div>
            <section id="filtro" class="container-menu none">
              <div class="container-empresa-filtro">
                 <a href="<?php echo base_url()?>pages/cadastro_empresa"> <button>Cadastrar Empresa</button></a>
              </div>
                <div class="container-empresa-titulo">
                    <h1>Filtros</h1>
                </div>
                 <div class="filtros_selecionados">
                  <ul id="lista">
                    <?php
                        if(isset($pesquisas)){
                          foreach($pesquisas as $key=>$selecionados) {
                            echo "<li><a href='".base_url()."pages/empresas_filter/remover/".$key."'>".$selecionados['pesquisa']."<b>X</b></a></li>";
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
                      <input type="text" name="search" placeholder="Digite o nome da empresa">
                      <input type="submit" value="Filtrar"  id="sumir">
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
                        <?php foreach ($ramos as $item_ramos) {
                          echo'<li><a href="'.base_url().'pages/empresas_filter/ramo/'.$item_ramos->desc_ramo.'">'.$item_ramos->desc_ramo.'<b>'.$item_ramos->qtd_ramo.'</b></a></li>' ;
                        } ?>
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
                    <img src="<?php echo base_url()?>public/img/letras/empresa.svg">
                </section>
                <?php
                  if(count($empresas) > 0){
                      echo '<section  class="continer-total-item">
                      <h1>'.$total.' empresas encontradas</h1>
                      </section>';
                      foreach ($empresas as $informacoes) {
                        echo ' <section class="item-frete-empresa-veiculo">
                          <div class="img-empresa">
                              <img src="'.base_url().''.$informacoes->foto_empresa.'">
                           </div>
                           <div class="informações-item">
                              <div>
                                <ul>
                                  <li><b>'.$informacoes->nome_fantasia.'</b></li>
                                  <li>'.$informacoes->data_engresso_empresa.'</li>
                                 </ul>
                              </div>
                              <div>
                                <ul>
                                  <li>Local: <b>'.$informacoes->nome_cidade.'/'.$informacoes->sigla_estads.'</b></li>
                                 </ul>
                              </div>
                               <div>
                                <ul>
                                  <li><b>Contato: '.$informacoes->contato_comercial.'</b></li>
                                 </ul>
                              </div>
                          </div>
                        </section> ';
                      }
                  }else{
                    echo '<section  class="continer-total-item">
                            <h1> 0 empresas encontradas</h1>
                          </section>';
                  }
                 ?>
                 <section class="paginação">
                  <?php
                    if(count($empresas) > 0){
                      echo $link;
                    }
                   ?>
              </section>
          </section>
      </section>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc') ?>

  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
  <script type="text/javascript">
      filtrar_input('input[name="search"]','#sumir');
      //
      select_populado('select[name="Destino"]','select[name="Destino_cidades"]','#sumir1','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');
      //
      select_populado('select[name="estado_empresa"]','select[name="cidades_empresas"]','','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');
      //
      select_populado('select[name="Origem"]','select[name="cidades"]','#sumir','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');

  </script>
  </body>
</html>
