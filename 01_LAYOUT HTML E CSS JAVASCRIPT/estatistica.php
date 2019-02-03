<!DOCTYPE html>
<html>
  <?php include('componentes/head_estatistica.inc'); ?>
  <body>
    <?php include('componentes/header.inc'); ?>
    <main>
      <div class="clear"></div>
      <div class="title-estatistica">
        <img src="public/img/letras/estatistica.svg" alt="titulo página">
      </div>
      <div class="chart_row">
        <div class="pieChart">
          <div class="title-chart">
            <img src="public/img/letras/usuario.svg" alt="titulo chart">
          </div>
          <div id="estatistica_usuario" class="charts_pie"></div>
        </div>
        <div class="pieChart">
          <div class="title-chart">
            <img src="public/img/letras/vendas.svg" alt="titulo chart">
          </div>
          <div id="estatistica_vendas" class="charts_pie"></div>
        </div>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="public/img/letras/carga.svg" alt="titulo chart">
        </div>
        <div id="estatistica_carga" class="charts_barra"></div>
      </div>
      <div class="chart_bar">
        <div class="title-chart">
          <img src="public/img/letras/veiculos.svg" alt="titulo chart">
        </div>
        <div id="estatistica_veiculo" class="charts_barra"></div>
      </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
