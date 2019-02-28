<!DOCTYPE html>
<html>
  <?php include('componentes/head_administrativo_areavizualizacao.inc'); ?>
  <body>
    <?php include('componentes/header_administrativo_areas.inc'); ?>
    <main>
      <div class="clear"></div>
      <div class="container-cadastro-titulo titulo-primario titulo-primario_area">
          <h1>Área de Monitoramento</h1>
      </div>
      <div class="clear"></div>
      <div class="container-cadastro-titulo titulo-primario">
          <h1>Estatísticas empresarias</h1>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="<?php echo base_url()?>public/img/letras/veiculos.svg" alt="titulo chart">
        </div>
        <div id="estatistica_veiculo" class="charts_barra"></div>
      </div>
      <div class="clear"></div>
      <div class="container-cadastro-titulo titulo-primario">
        <h1>Seus Fretes</h1>
        <div class="menu-actions">
          <ul>
            <li id="btn-listFretes" class="menu_active">Lista Fretes</li>
            <li id="btn-disabledFretes">Fretes Desativados</li>
          </ul>
        </div>
      </div>
      <div class="clear"></div>
      <section id="container-listFretes">
        <div class="actions-fretes">
          <div class="container-cadastro-input fretes-checkbox">
            <label class="container-checkbox">Selecionar todos os 0 FRETES
              <input id="check_all_activated" type="checkbox" value='fretes_all'>
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="container-cadastro-input-button btns_actions">
            <button type="button" name="button" disabled>Atualizar datas</button>
            <button type="button" name="button" disabled>Desativar Fretes</button>
          </div>
        </div>
        <section class="item-frete-empresa-veiculo ">
          <div class="container-cadastro-input fretes-checkbox">
            <label class="container-checkbox">Selecionar frete
              <input  type="checkbox" class="check_frete_activated" name="freteCheck_activated" value='fretes_id'>
              <span class="checkmark"></span>
            </label>
          </div>
         <a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">
           <div class="img-empresa">
             <img src="<?php echo base_url() ?>public/img/logo.png">
            </div>
          </a>
          <div class="informações-item desktopImportant">
            <div>
              <ul>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
                <li>Preço: '.$container_fretes->preco_frete.'</li>
                <li>Produto:'.$container_fretes->nome_produto.'</li>
              </ul>
            </div>
            <div class="secondary-item">
              <div class="btns_list container-cadastro-input-button column">
                <button type="button" name="button">Desativar Frete</button>
                <button type="button" name="button">Editar Frete</button>
              </div>
            </div>
          </div>
          <div class="informações-item mobile">
            <div>
              <ul>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
                <li>Produto:'.$container_fretes->nome_produto.'</li>
                <li>Preço: '.$container_fretes->preco_frete.'</li>
              </ul>
            </div>
          </div>
        </section>
      </section>
      <section id="container-disabledFretes" >
        <div class="actions-fretes">
          <div class="container-cadastro-input fretes-checkbox">
            <label class="container-checkbox">Selecionar todos os 0 FRETES DESATIVADOS
              <input id="check_all_disabled" type="checkbox" value='fretes_all'>
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="container-cadastro-input-button btns_actions">
            <button type="button" name="button" disabled>Reativar Fretes</button>
          </div>
        </div>
        <section id="container-frete0" class="item-frete-empresa-veiculo fretes_desativados">
          <div class="container-cadastro-input fretes-checkbox">
            <label class="container-checkbox">Selecionar frete
              <input  type="checkbox" class="check_frete_disabled" name="freteCheck_disabled" value='frete_id' >
              <span class="checkmark"></span>
            </label>
          </div>
         <a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">
           <div class="img-empresa">
             <img src="<?php echo base_url() ?>public/img/logo.png">
            </div>
          </a>
          <div class="informações-item desktopImportant">
            <div>
              <ul>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
                <li>Preço: '.$container_fretes->preco_frete.'</li>
                <li>Produto:'.$container_fretes->nome_produto.'</li>
              </ul>
            </div>
            <div class="secondary-item">
              <div class="btns_list container-cadastro-input-button column">
                <button type="button" name="button" >Reativar Frete</button>
              </div>
            </div>
          </div>
          <div class="informações-item mobile">
            <div>
              <ul>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
                <li><a href="'.base_url().'fretes/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
                <li>Produto:'.$container_fretes->nome_produto.'</li>
                <li>Preço: '.$container_fretes->preco_frete.'</li>
              </ul>
            </div>
          </div>
        </section>
      </section>
    </main>
    <div class="clear"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/actionsButtons.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/actionCheckbox.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
