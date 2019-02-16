
<!DOCTYPE html>
<html>
  <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>
       <div class="cadastro-veiculo-form content">
          <form action="<?php echo base_url()?>Auth_veiculo/Checkin_efetuar" method="post">
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Checkin / Efetuar</h1>
              </div>
              
                <div class="container-cadastro-input">
                    <label for="Estados">Estados/Pais</label>
                    <select id="Estados" name="Estados">
                      <option>Selecionar Estados</option>
                      <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->nome_estado.'</option>' ;
                        } ?>
                    </select>
                </div>
               <div class="container-cadastro-input">
                    <label for="Cidade">Cidade</label>
                    <select id="Cidade" name="Cidade">
                      <option>Selecionar Cidade</option>
                    </select>
                </div>
                <div class="container-cadastro-input">
                    <label for="Destino">Destino</label>
                    <select id="Destino" name="Destino">
                      <option>Selecionar Destino</option>
                       <?php foreach ($estados as $estados_item) {
                          echo'<option value='.$estados_item->id_estado.'>'.$estados_item->nome_estado.'</option>' ;
                        } ?>
                    </select>
                </div>
                <div class="container-cadastro-input-submit">
                    <input type="submit" value="Salvar">
                </div>
          </div>
        </form>
       </div>
    </main>
      <script type="text/javascript" src="<?php echo base_url() ?>public/js/menu_mobile.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>public/js/select_populado.js"></script>
  <script type="text/javascript">
    select_populado_simples('select[name="Estados"]','select[name="Cidade"]');
  </script>
  </body>
</html>