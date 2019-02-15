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
        <!-- SCRIPT -->
        <script type="text/javascript">
          $('#mapBrasil g').click(function(){
            location.href = "<?php echo base_url('pages/')?>fretesEstado/"+$(this)[0].id
          })
        </script>
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
            echo'<option value="'.$estados_item->nome_estado.'"> '.$estados_item->nome_estado.'</option>' ;
          } ?>
        </select>
        <!-- SCRIPT -->
        <script type="text/javascript">
          $('.lista_option_estados').change(function() {
            location.href = "<?php echo base_url('pages/')?>fretesEstado/" + $(this).val()
          })
        </script>
        <ul id="lista_estados">
          <?php foreach ($estados as $estados_item) {
            echo '<li><a href="'.base_url('pages/').'fretesEstado/'.$estados_item->sigla_estads.'">'.$estados_item->sigla_estads.'</a></li>' ;
          } ?>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
</html>
