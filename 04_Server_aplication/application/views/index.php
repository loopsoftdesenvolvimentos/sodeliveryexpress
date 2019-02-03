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
          <option value="AC">Acre </option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espirito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará </option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>

        <ul id="lista_estados">
          <li><a href="#">AC</a></li>
          <li><a href="#">AL</a></li>
          <li><a href="#">AP</a></li>
          <li><a href="#">AM</a></li>
          <li><a href="#">BA</a></li>
          <li><a href="#">CE</a></li>
          <li><a href="#">DF</a></li>
          <li><a href="#">ES</a></li>
          <li><a href="#">GO</a></li>
          <li><a href="#">MA</a></li>
          <li><a href="#">MT</a></li>
          <li><a href="#">MS</a></li>
          <li><a href="#">MG</a></li>
          <li><a href="#">PA</a></li>
          <li><a href="#">PB</a></li>
          <li><a href="#">PR</a></li>
          <li><a href="#">PE</a></li>
          <li><a href="#">PI</a></li>
          <li><a href="#">RJ</a></li>
          <li><a href="#">RN</a></li>
          <li><a href="#">RS</a></li>
          <li><a href="#">RO</a></li>
          <li><a href="#">RR</a></li>
          <li><a href="#">SC</a></li>
          <li><a href="#">SP</a></li>
          <li><a href="#">SE</a></li>
          <li><a href="#">TO</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="borderred"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
  </body>
  <script type="text/javascript" src="public/js/menu_mobile.js"></script>
</html>
