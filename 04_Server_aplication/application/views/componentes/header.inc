
<header>
      <div class="logo-publicidade content">
        <div class="logo">
          <a href="index.php">
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
          <div class="pesquisa">
            <input type="text" id="pesquisa">
            <button type="submit">Buscar</button>
          </div>
          <div id="btn-menu" class="menu-mobile mobile" >
            <img src="<?php echo base_url()?>public/img/icons/menu.svg" alt="botão de menu">
          </div>
          <nav class="none">
            <ul>
              <li class="mobile">
                <a href="<?php echo base_url()?>pages/login" id="login">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/login.svg" alt="">
                    <p>Login</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/index" class="nomarginleft">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/home.svg" alt="icone de frete">
                    <p>Home</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/fretes">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/frete.svg" alt="icone de frete">
                    <p>Frete</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/veiculos">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/truck-front.svg" alt="icone de frete">
                    <p>Veículo</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/empresas">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/empresa.svg" alt="icone de frete">
                    <p>Empresa</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/estatisticas">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/Statistics.svg" alt="icone de frete">
                    <p>Estatística</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="<?php echo base_url()?>pages/duvidas" id="noborderbottom">
                  <div class="icon-menu">
                    <img src="<?php echo base_url()?>public/img/icons/DUVIDAS.svg" alt="icone de frete">
                    <p>Dúvidas</p>
                  </div>
                </a>
              </li>

            </ul>
          </nav>
        </div>

        <div class="conta">
          <div class="mobile-cadastro none">
            <a href="<?php echo base_url()?>pages/login" id="login">
                <img src="<?php echo base_url()?>public/img/icons/login.svg" alt="">
              login
            </a>
          </div>
          <div class="desk-cadastro">
            <a href="<?php echo base_url()?>pages/login">
                <img src="<?php echo base_url()?>public/img/icons/login.svg" alt="">
                <p>Entre ou cadastre-se</p>
            </a>
          </div>
        </div>
      </div>
    </header>