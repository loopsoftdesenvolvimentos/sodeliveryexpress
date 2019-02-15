<!DOCTYPE html>
<html>
  <?php include('componentes/head_administrativo_areaadministrativa.inc'); ?>
  <body>
    <?php include('componentes/header_administrativo_areaadministrativa.inc'); ?>
    <main>
      <div class="clear"></div>
      <div id="editarEmpresa" class="cadastro-veiculo-form content">
        <form action="" method="post">
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo">
              <h1>Cadastrar Empresa</h1>
            </div>
            <div class="container-cadastro-input">
              <label for="placa_veiculo">Placa</label>
              <input type="text" id="placa_veiculo" name="placa_veiculo">
            </div>
            <div class="container-cadastro-input">
              <label for="nome_proprietario">Nome proprietário</label>
              <input type="text" id="nome_proprietario" name="nome_proprietario">
            </div>
          </div>
        </form>
      </div>
      <div id="verEditaPagamento" class="cadastro-veiculo-form content">
        <div class="chart_bar">
          <div class="title-chart">
            <img src="<?php echo base_url()?>public/img/letras/carga.svg" alt="titulo chart">
          </div>
          <div id="estatistica_carga" class="charts_barra"></div>
        </div>
      </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <!-- SCRIPTS -->
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
