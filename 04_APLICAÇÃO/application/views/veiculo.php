<!DOCTYPE html>
<html>
    <?php 
        include('componentes/head_veiculos.inc');
     ?>
  <body>
      <?php 
          include('componentes/header.inc');
       ?>
    <main>
       <div class="estatistica_veiculos">
            <div class="content-estatica-veiculos">
                <p> <b>27.228</b> veículos estão com check-in ativo</p>
            </div> 
            
            <div class="content-estatica-veiculos">
                <p> <b>272.284</b> veículos cadastrados</p>
            </div> 

            <div class="content-estatica-veiculos">
                <p> <b>Check-in é gratuito</b>  e uma maneira fácil de conseguir cargas</p>
                <div class="content-estatica-veiculos-button">
                 <a href="veiculo/cadastro"><button> Cadastre seu veiculo</button></a>
                </div>
            </div> 
        </div>
        <div id="mapa"> </div>
    </main>
    <?php include('componentes/footer.inc'); ?>
    <script type="text/javascript" src="public/js/menu_mobile.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF8QP6R3rJFZLZJcEsee3B3a1wz6Pul8E&callback=mapa"
    type="text/javascript"></script>
  </body>
</html>