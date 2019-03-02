
<header>
  <div class="acima-header">
        <div class="info-contato">
          <a href="mailto:comercial@sodeliveryexpress.co.br" target="_blank">
            <div class="icone-top">
              <img src="<?php echo base_url()?>public/img/icons/email.svg">
              <span>comercial@sodeliveryexpress.com.br</span>
            </div>
          </a>

          <div class="icone-top">
            <img src="<?php echo base_url()?>public/img/icons/telefone.svg">
            <span>11 4216 8169</span>
          </div>

          <a href="https://api.whatsapp.com/send?phone=5511997239032" target="_blank">
            <div class="icone-top">
              <img src="<?php echo base_url()?>public/img/icons/whatsapp.svg">
              <span>11 99723 9032</span>
            </div>
          </a>
          <a href="skype:sodeliveryofc">
            <div class="icone-top">
              <img src="<?php echo base_url()?>public/img/icons/skype-dark.svg">
              <span>sodeliveryofc</span>
            </div>
          </a>
        </div>

        <div class="icone-top-midia">
          <a href="https://www.facebook.com/sodeliveryExpress/" target="_blank">
            <img src="<?php echo base_url()?>public/img/icons/facebook-dark.svg">
          </a>

          <a href="https://www.instagram.com/sodeliveryexpress" target="_blank">
            <img src="<?php echo base_url()?>public/img/icons/instagram-dark.svg">
          </a>

          <a href="https://www.linkedin.com/company/sodeliveryexpress" target="_blank">
            <img src="<?php echo base_url()?>public/img/icons/linkedin-dark.svg">
          </a>

          <a href="https://www.youtube.com/channel/UCb93S1zCUAToY4Da6zLF6_w"  id="border_lateral" target="_blank">
            <img src="<?php echo base_url()?>public/img/icons/youtube-dark.svg">
          </a>
          <a href="skype:sodeliveryofc">
            <img src="<?php echo base_url()?>public/img/icons/skype-dark.svg">
          </a>
        </div>
      </div>
      <div class="logo-publicidade content">
        <div class="logo">
          <a href="<?= site_url('Home') ?>">
            <img src="<?php echo base_url()?>public/img/logo.png" alt="logo Só Delivery">
          </a>
        </div>
        <div class="publicidade none">
          <p style="text-align: center; color: white;
          line-height: 100px; font-size: 18px;
          ">espaço reservado a publicidade</p>
        </div>
      </div>

      <div class="menu-conta">
        <div class="menu-bar">
          <div id="btn-menu" class="menu-mobile mobile" >
            <img src="<?php echo base_url()?>public/img/icons/menu.svg" alt="botão de menu">
          </div>
          <nav class="none">
            <ul>
              <li>
                <a href="<?= site_url('Home') ?>" class="nomarginleft">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/home.svg" alt="icone de frete">
                    <p>Página Inicial</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?= site_url('Home/areacadastro') ?>#cadastramentoVeiculo">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/freteADM.svg" alt="icone de frete">
                    <p>Cadastrar Fretes</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/areamonitoramento/#estatisticas">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/verEstatisticasADM.svg" alt="icone de estatisticas">
                    <p>Ver Estatística</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/areamonitoramento/#listaVeiculos">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/verVeiculosADM.svg" alt="icone de frete">
                    <p>Listar Veículos</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/areamonitoramento/#listarFretes" >
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/verFretesADM.svg" alt="icone de frete">
                    <p>Listar Fretes</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/areaadministrativa/#editarEmpresa" >
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/editarEmpresaADM.svg" alt="icone de frete">
                    <p>Editar Empresa</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/areaadministrativa/#verEditaPagamento">
                  <div class="icon-menu" id="noborderbottom">
                    <img src="<?php echo base_url()?>public/img/icons/verEditarPagamentoADM.svg" alt="icone de frete">
                    <p>Central pagamento</p>
                  </div>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="conta">
          <a href="<?php echo base_url()?>pages/areaadministrativa/#editarEmpresa">
            <div class="config">
              <img id="blank" src="<?php echo base_url()?>public/img/icons/settings-work-tool.svg">
              <img src="<?php echo base_url()?>public/img/icons/settings-work-tool-dark.svg">
              <span>Configurações</span>
            </div>
          </a>
        </div>
      </div>
    </header>
