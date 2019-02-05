<!DOCTYPE html>
<html>
  <?php include('componentes/head_index.inc'); ?>
  <body>
    <?php include('componentes/header.inc') ?>
    <main>
      <div class="clear"></div>
      <div class="video-map content">
        <div class="video-explicativo">
          <h2>Veja como funciona</h2>
          <iframe src="https://www.youtube.com/embed/DPB_IVicb7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="clear"></div>
        <?php include('componentes/mapa.inc') ?>
      </div>
      <div class="clear"></div>

      <div class="estados content">
        <div class="estado-nome">
          <img src="<?php echo base_url()?>public/img/icons/package.svg" alt="icone de pacote">
          <h2>Escolhe seu Estado:</h2>
        </div>

        <select class="lista_option_estados">
					<option selected disabled>Selecione o Estado</option>
           <?php foreach ($estados as $estados_item) {
            echo'<option>'.$estados_item->nome_estado.'</option>' ;
          } ?>
        </select>

        <ul id="lista_estados">
          <?php foreach ($estados as $estados_item) {
            echo'<li><a href="">'.$estados_item->sigla_estads.'</a></li>' ;
          } ?>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
