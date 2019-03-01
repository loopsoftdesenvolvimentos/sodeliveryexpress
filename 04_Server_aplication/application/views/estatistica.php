<!DOCTYPE html>
<html>
  <?php include('componentes/head_estatistica.inc'); ?>
  <body>
    <?php include('componentes/header.inc'); ?>
    <main>
      <div class="clear"></div>
      <div class="title-estatistica">
        <img src="<?php echo base_url()?>public/img/letras/estatistica.svg" alt="titulo página">
      </div>
      <div class="chart_row">
        <div id="chart_first" class="pieChart">
          <div class="title-chart">
            <img src="<?php echo base_url()?>public/img/letras/empresa_estatistica.svg" alt="titulo chart">
          </div>
          <div id="estatistica_usuario" class="charts_pie"></div>
        </div>
        <div class="pieChart">
          <div class="title-chart">
            <img src="<?php echo base_url()?>public/img/letras/veiculos_estatistica.svg" alt="titulo chart">
          </div>
          <div id="estatistica_vendas" class="charts_pie"></div>
        </div>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="<?php echo base_url()?>public/img/letras/fretes_estatistica.svg" alt="titulo chart">
        </div>
        <div id="estatistica_carga" class="charts_barra"></div>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="<?php echo base_url()?>public/img/letras/veiculos.svg" alt="titulo chart">
        </div>
        <div id="estatistica_veiculo" class="charts_barra"></div>
      </div>
    </main>
    <div class="clear"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
