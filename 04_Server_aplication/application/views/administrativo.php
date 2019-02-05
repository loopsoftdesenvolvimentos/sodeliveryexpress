<!DOCTYPE html>
<html>
  <?php include('componentes/head_administrativo.inc');?>
  <body>
    <?php include('componentes/header_administrativo.inc'); ?>

    <main>

      <div class="clear"></div>

      <div class="informacoes-topo content">
        <div class="info-servico">
          <div class="info-name">
            <h3>Informações Serviço</h3>
            <img src="<?php echo base_url()?>public/img/icons/service.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Veículos: </b><span>00</span> Cadastrados</li>
              <li><b>Fretes: </b><span>00</span> Cadastrados</li>
              <li class="destaque_info amarelo-forte"><b>Valor total dos Fretes: </b>R$: <span>00,00</span></li>
            </ul>
          </div>
        </div>

        <div class="info-conta">
          <div class="info-name">
            <h3>Informações Conta</h3>
            <img src="<?php echo base_url()?>public/img/icons/accoun.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Usuário: </b><span>Nome_usuario</span></li>
              <li><b>Empresa: </b><span>Nome_empresa</span></li>
              <li class="destaque_info azul-forte"><b>Próxima Fatura: </b><span> 00/00/0000</span> <a href="#">ver extrato</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="clear"></div>

      <div class="quadro-areas content">
        <div class="quadro-avisos">
          <h3>Avisos</h3>
          <div class="clear"></div>
          <ul class="sequencia">
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
          </ul>
        </div>

        <div class="areas content">
          <div class="area1">
            <div class="area-nome">
              <h3>Área de cadastramento</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a href="<?php echo base_url()?>pages/areacadastro/#cadastramentoVeiculo">
                  <img src="<?php echo base_url()?>public/img/icons/veiculosADM.png">
                  Cadastrar veículos
                </a>
              </div>

              <div class="container">

                <a href="<?php echo base_url()?>pages/areacadastro/#cadastramentoFretes">
                  <img src="<?php echo base_url()?>public/img/icons/freteADM.png">
                  Cadastrar Fretes
                </a>
              </div>
            </div>
          </div>

          <div class="area2">
            <div class="area-nome">
              <h3>Área de monitoramento</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a href="areavizualizacao">
                  <img src="<?php echo base_url()?>public/img/icons/verEstatisticasADM.png">
                  Ver estatísticas <br> empresariais
                </a>
              </div>

              <div class="container">

                <a href="<?php echo base_url()?>pages/areacadastro/#verVeiculos">
                  <img src="<?php echo base_url()?>public/img/icons/verVeiculosADM.png">
                  Ver meus veículos
                </a>
              </div>

              <div class="container">

                <a href="<?php echo base_url()?>pages/areacadastro/#verFretes">
                  <img src="<?php echo base_url()?>public/img/icons/verFretesADM.png">
                  Ver meus fretes
                </a>
              </div>
            </div>
          </div>

          <div class="area3">
            <div class="area-nome">
              <h3>Área administrativa</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a id="percent" href="<?php echo base_url()?>pages/areaadministrativa/#editarEmpresa">
                  <img src="<?php echo base_url()?>public/img/icons/editarEmpresaADM.png">
                  Editar empresa
                </a>
              </div>

              <div class="container">
                <a href="<?php echo base_url()?>pages/areaadministrativa/#verEditaPagamento">
                  <img src="<?php echo base_url()?>public/img/icons/verEditarPagamentoADM.png">
                  Ver/Editar pagamento
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="borderred"></div>
    </main>

    <footer>
      <div class="copyright">
        <p>&copy; <b>Loop Soft</b> Internet Serviços LTDA</p>
      </div>
    </footer>
  </body>
</html>
