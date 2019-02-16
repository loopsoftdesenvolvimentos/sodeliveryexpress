<!DOCTYPE html>
<html>
  <?php include('componentes/head_checkin.inc') ?>
  <body>
    <?php include('componentes/header_veiculo_adm.inc') ?>
    <main>

       <div class="cadastro-veiculo-form content">
            <div class="container-cadastro-espacos">
              <div class="container-cadastro-titulo">
                  <h1>Painel administrativo veiculo</h1>
              </div>
               <div class="container-cadastro-input-button-acesso">
                    <a href="<?php echo base_url()?>Auth_veiculo/checkin"><button>Fazer Checkin</button></a>
                </div>
              <div class="container-cadastro-input-button-acesso button-second">
                    <a href="<?php echo base_url()?>Auth_veiculo/editar_dados"><button>Editar Cadastro</button></a>
                </div>
                <div class="container-cadastro-input-button-acesso button-second">
                    <a href="<?php echo base_url()?>/Auth_veiculo/logout"><button>Sair</button></a>
                </div>
            </div>

        </form>
       </div>

    </main>
  <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  </body>
</html>
