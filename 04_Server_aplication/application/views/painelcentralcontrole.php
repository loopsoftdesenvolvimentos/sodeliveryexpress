<!DOCTYPE html>
<html>
  <?php include('componentes/head_painel_central.inc'); ?>
  <body>
    <?php include('componentes/header_painel_central.inc'); ?>
    <main>
      <div class="clear"></div>
      <div class="informacoes-topo content">
        <div class="info-servico">
          <div class="info-name">
            <h3>Informações de Gerais</h3>
            <img src="<?php echo base_url()?>public/img/icons/service.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Veículos: </b><span>00</span> Cadastrados</li>
              <li><b>Fretes: </b><span>00</span> Cadastrados</li>
              <li class="destaque_info amarelo-forte"><b>Valor total dos Fretes: </b>R$: <span>00,00</span></li>
            </ul>
          </div>
        </div>

        <div class="info-conta">
          <div class="info-name">
            <h3>Informações Conta</h3>
            <img src="<?php echo base_url()?>public/img/icons/accoun.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Usuário: </b><span>Nome_usuario</span></li>
              <li><b>Empresa: </b><span>Nome_empresa</span></li>
              <li class="destaque_info azul-forte"><b>Painel de Controle</b></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div id="estatisticas" class="container-cadastro-titulo titulo-primario">
          <h1>Estatísticas</h1>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="<?php echo base_url()?>public/img/letras/veiculos.svg" alt="titulo chart">
        </div>
        <div id="estatistica_veiculo" class="charts_barra"></div>
      </div>
      <div id="listaVeiculos" class="container-cadastro-titulo titulo-primario">
          <h1>Lista Veículos</h1>
      </div>
      <div class="clear"></div>
      <div class="actions-fretes">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecionar todos os 0  VEÍCULOS
            <input id="check_all_activated_veiculo" type="checkbox" value='veiculos_all'>
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="container-cadastro-input-button">
          <button type="button" name="button">Bloquear Veículos</button>
          <button type="button" name="button">Desbloquear Veículos</button>
          <button type="button" name="button">Mandar Aviso</button>
        </div>
      </div>
      <section class="item-frete-empresa-veiculo ">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecionar Veículo
            <input  type="checkbox" class="check_veiculo_activated" value='fretes_id'>
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
              <li><a>Nome Motorista: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a>Placa do veículo: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Contanto:'.$container_fretes->nome_produto.'</li>
              <li>modelo: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
          <div class="secondary-item">
            <div class="btns_list btns_veiculo container-cadastro-input-button column">
              <button type="button" name="button">Bloquear Veículos</button>
              <button type="button" name="button">Desbloquear Veículos</button>
              <button type="button" name="button">Mandar Aviso</button>
            </div>
          </div>
        </div>
        <div class="informações-item mobile">
          <div>
            <ul>
              <li><a >Nome Motorista: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a >Placa do veículo: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Contanto:'.$container_fretes->nome_produto.'</li>
              <li>modelo: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
        </div>
      </section>
      <div class="clear"></div>
      <div id="listarFretes" class="container-cadastro-titulo titulo-primario">
          <h1>Lista Fretes</h1>
      </div>
      <div class="clear"></div>
      <div class="actions-fretes">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecionar todos os 0 FRETES
            <input id="check_all_activated" type="checkbox" value='fretes_all'>
            <span class="checkmark"></span>
          </label>
        </div>
        <div class="container-cadastro-input-button">
          <button type="button" name="button">Bloquear Fretes</button>
          <button type="button" name="button">Desbloquear Fretes</button>
          <button type="button" name="button">Mandar Aviso</button>
        </div>
      </div>
      <section class="item-frete-empresa-veiculo ">
        <div class="container-cadastro-input fretes-checkbox">
          <label class="container-checkbox">Selecionar frete
            <input type="checkbox" class="check_frete_activated" value='fretes_id'>
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
              <li><a >Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a >Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Preço: '.$container_fretes->preco_frete.'</li>
              <li>Produto:'.$container_fretes->nome_produto.'</li>
            </ul>
          </div>
          <div class="secondary-item">
            <div class="btns_list container-cadastro-input-button column">
              <button type="button" name="button">Bloquear Fretes</button>
              <button type="button" name="button">Desbloquear Fretes</button>
              <button type="button" name="button">Mandar Aviso</button>
            </div>
          </div>
        </div>
        <div class="informações-item mobile">
          <div>
            <ul>
              <li><a>Origem: <b>'.$container_fretes->cidade_saida.'</b></a></li>
              <li><a>Destino: <b>'.$container_fretes->cidade_entrega.'</b></a></li>
              <li>Produto:'.$container_fretes->nome_produto.'</li>
              <li>Preço: '.$container_fretes->preco_frete.'</li>
            </ul>
          </div>
        </div>
      </section>
    </main>
    <div class="clear"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/actionCheckbox2.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/actionCheckbox.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
