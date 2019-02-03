<!DOCTYPE html>
<html>
  <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>
       <div class="cadastro-veiculo-form content">
          <form action="" method="post">
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Checkin / Efetuar</h1>
              </div>
              
                <div class="container-cadastro-input">
                    <label for="Estados">Estados/Pais</label>
                    <select id="Estados" name="Estados">
                      <option>Selecionar Estados</option>
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
                    </select>
                </div>
                <div class="container-cadastro-input-submit">
                    <input type="submit" value="Salvar">
                </div>
          </div>
        </form>
       </div>
    </main>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  </body>
</html>