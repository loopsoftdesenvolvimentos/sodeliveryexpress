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
      <div class="container-cadastro-titulo titulo-primario">
          <h1>Lista Veículos</h1>
      </div>
      <div class="clear"></div>
      <div class="actions-fretes">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecinar todos os 0 fretes
            <input type="checkbox" value='fretes_all'>
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="container-cadastro-input-button">
          <button type="button" name="button">Exluir Veículos</button>
          <button type="button" name="button">Desativar Veículos</button>
        </div>
      </div>
      <section class="item-frete-empresa-veiculo ">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selcionar frete
            <input type="checkbox" value='fretes_id'>
            <span class="checkmark"></span>
          </label>
        </div>
       <a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">
         <div class="img-empresa">
            <img src="'.base_url().''.$container_fretes->foto_empresa.'">
          </div>
        </a>
        <div class="informações-item desktopImportant">
          <div>
            <ul>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Nome Motorista: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Placa do veículo: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Contanto:'.$container_fretes->nome_produto.'</li>
              <li>modelo: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
          <div class="secondary-item">
            <div class="container-cadastro-input-button column">
              <button type="button" name="button">Exluir Veículo</button>
              <button type="button" name="button">Editar Veículo</button>
            </div>
          </div>
        </div>
        <div class="informações-item mobile">
          <div>
            <ul>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Nome Motorista: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Placa do veículo: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Contanto:'.$container_fretes->nome_produto.'</li>
              <li>modelo: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
        </div>
        <div class="info-extra">
          <div class="container-cadastro-input-button column">
            <button type="button" name="button">Exluir Veículo</button>
            <button type="button" name="button">Editar Veículo</button>
          </div>
        </div>
      </section>
      <div class="clear"></div>
      <div class="container-cadastro-titulo titulo-primario">
          <h1>Lista Fretes</h1>
      </div>
      <div class="clear"></div>
      <div class="actions-fretes">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecinar todos os 0 fretes
            <input type="checkbox" value='fretes_all'>
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="container-cadastro-input-button">
          <button type="button" name="button">Exluir Fretes</button>
          <button type="button" name="button">Desativar Fretes</button>
          <button type="button" name="button">Atualizar datas</button>
        </div>
      </div>
      <section class="item-frete-empresa-veiculo ">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selcionar frete
            <input type="checkbox" value='fretes_id'>
            <span class="checkmark"></span>
          </label>
        </div>
       <a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">
         <div class="img-empresa">
            <img src="'.base_url().''.$container_fretes->foto_empresa.'">
          </div>
        </a>
        <div class="informações-item desktopImportant">
          <div>
            <ul>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Preço: '.$container_fretes->preco_frete.'</li>
              <li>Produto:'.$container_fretes->nome_produto.'</li>
            </ul>
          </div>
          <div class="secondary-item">
            <div class="container-cadastro-input-button column">
              <button type="button" name="button">Exluir Fretes</button>
              <button type="button" name="button">Fretes Desativar</button>
              <button type="button" name="button">Listar Motoristas</button>
            </div>
          </div>
        </div>
        <div class="informações-item mobile">
          <div>
            <ul>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a href="'.base_url().'pages/frete/'.$container_fretes->id_frete.'">Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Produto:'.$container_fretes->nome_produto.'</li>
              <li>Preço: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
        </div>
        <div class="info-extra">
          <div class="container-cadastro-input-button column">
            <button type="button" name="button">Exluir Fretes</button>
            <button type="button" name="button">Fretes Desativar</button>
            <button type="button" name="button">Listar Motoristas</button>
          </div>
        </div>
      </section>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
