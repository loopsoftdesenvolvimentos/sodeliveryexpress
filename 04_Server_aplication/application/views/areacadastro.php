<!DOCTYPE html>
<html>
    <?php include('componentes/head_administrativo_areacadastramento.inc');?>
  <body>
    <?php include('componentes/header_administrativo_areacadastramento.inc'); ?>
    <main>
      <div id="cadastramentoFretes" class="cadastro-veiculo-form content">
         <form action="" method="post">
           <div class="container-cadastro-espacos">
             <div class="container-cadastro-titulo titulo-primario">
                 <h1>Cadastrar Frete</h1>
             </div>
             <div class="content-cadastro">
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input">
                     <label for="origem">Origem</label>
                     <select name="origem">
                       <option disabled selected>Selecione o estado</option>
                     </select>
                   </div>
                   <div class="container-cadastro-input">
                     <label for="destino">Destino</label>
                     <select name="destino">
                       <option disabled selected>Selecione o estado</option>
                     </select>
                   </div>
                 </div>
                 <div class="info-extra">
                   <p>Distância Total: 00km</p>
                 </div>
               </div>

               <div class="container-cadastro-titulo">
                 <h1>Produto</h1>
               </div>
               <div class="container-cadastro-input">
                 <label for="nome_produto">Nome do Produto</label>
                 <input type="text" name="nome_produto">
               </div>
               <div class="container-cadastro-input">
                 <label for="especie">Espécie</label>
                 <select name="especie">
                   <optio selected disabled>Selecionar uma espécie</option>
                   <option value="Animais">Animais</option>
                   <option value="Big Bag">Big Bag</option>
                   <option value="Bobina">Bobina</option>
                   <option value="Caixas">Caixas</option>
                   <option value="Container">Container</option>
                   <option value="Diversos">Diversos</option>
                   <option value="Fardos">Fardos</option>
                   <option value="Fracionada">Fracionada</option>
                   <option value="Granel">Granel</option>
                   <option value="Metro Cubico">Metro Cubico</option>
                   <option value="Milheiro">Milheiro</option>
                   <option value="Mudanças">Mudanças</option>
                   <option value="Paletes">Paletes</option>
                   <option value="Passageiro">Passageiro</option>
                   <option value="Sacos">Sacos</option>
                   <option value="Tambor">Tambor</option>
                   <option value="Unidades">Unidades</option>
                 </select>
               </div>

               <div class="container-cadastro-titulo">
                 <h1>Informações do Veículo</h1>
               </div>
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input">
                     <label for="rastreamento">Tem Rastreamento?</label>
                     <select name="rastreamento">
                       <option disabled selected>Selecione uma opção abaixo</option>
                       <option value="não">Não</option>
                       <option value="sim">Sim</option>
                     </select>
                   </div>
                   <div class="container-cadastro-input">
                     <label for="complemento">Tem Complemento?</label>
                     <select id="select_complemento" name="complemento">
                       <option disabled selected>Selecione uma opção abaixo</option>
                       <option value="não">Não</option>
                       <option value="sim">Sim</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div id="complemento" class="container-cadastro-input none">
                 <div class="row">
                   <div class="container-cadastro-input">
                     <label for="qtd_volume">Quantidade de Volume</label>
                     <input type="text" name="qtd_volume" >
                   </div>
                   <div class="container-cadastro-input">
                     <label for="peso_complemento">Peso em KG</label>
                     <input type="text" name="peso_complemento" >
                   </div>
                   <div class="container-cadastro-input">
                     <label for="volume">Volume m³</label>
                     <input type="text" name="volume" >
                   </div>
                 </div>
               </div>
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="leve">Leve</label>
                     <label class="container-checkbox">Toco
                       <input type="checkbox" value='toco'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">VLC
                       <input type="checkbox" value='vlc'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">3/4
                       <input type="checkbox" value='3/4'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Moto
                       <input type="checkbox" value='moto'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Fiorino
                       <input type="checkbox" value='fiorino'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">HR
                       <input type="checkbox" value='hr'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Master
                       <input type="checkbox" value='master'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="medio">Médio</label>
                     <label class="container-checkbox">Truck
                       <input type="checkbox" value='truck'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Bitruck
                       <input type="checkbox" value='Bitruck'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="pesado">Pesado</label>
                     <label class="container-checkbox">Rodotrem
                       <input type="checkbox" value='rodotrem'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Vanderléria
                       <input type="checkbox" value='vanderléria'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Bitrem
                       <input type="checkbox" value='bitrem'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Carreta LS
                       <input type="checkbox" value='carreta_ls'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Carreta
                       <input type="checkbox" value='carreta'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                 </div>
               </div>
               <div class="container-cadastro-titulo">
                 <h1>Carroceria</h1>
               </div>
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="leve">Fechada</label>
                     <label class="container-checkbox">Baú
                       <input type="checkbox" value='baú'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Baú Frigorífico
                       <input type="checkbox" value='baú Frigorífico'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">slider
                       <input type="checkbox" value='slider'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Mochila(Moto)
                       <input type="checkbox" value='Mochila(moto)'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="medio">Aberta</label>
                     <label class="container-checkbox">Caçamba
                       <input type="checkbox" value='Caçamba'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Grande Baixa
                       <input type="checkbox" value='Grande Baixa'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Graneleiro
                       <input type="checkbox" value='Graneleiro'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Prancha
                       <input type="checkbox" value='Prancha'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="pesado">Especial</label>
                     <label class="container-checkbox">Bug Porta Container
                       <input type="checkbox" value='Bug Porta Container'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Munk
                       <input type="checkbox" value='Munk'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Silo
                       <input type="checkbox" value='Silo'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Tanque
                       <input type="checkbox" value='Tanque'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Gaiola
                       <input type="checkbox" value='Gaiola'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Cegonheiro
                       <input type="checkbox" value='Cegonheiro'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Apenas Cavalo
                       <input type="checkbox" value='Apenas Cavalo'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                 </div>
               </div>
               <div class="container-cadastro-titulo">
                 <h1>Preço</h1>
               </div>
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input">
                     <label for="preco">Preço R$:</label>
                    <input type="text" name="preco" value="">
                   </div>
                   <div class="container-cadastro-input">
                     <label for="preco">Tipo pagamento</label>
                     <select name="complemento">
                       <option disabled selected>Selecione uma opção abaixo</option>
                       <option value="porTonelada">Por Tonelada</option>
                       <option value="A combinar">A Combinar</option>
                       <option value="A combinar">Km/R$</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="container-cadastro-input">
                 <label for="obs">Observações</label>
                 <textarea name="name" rows="8" cols="10"></textarea>
               </div>
               <div class="container-cadastro-input-submit">
                 <input type="submit" value="Cadastrar Frete">
               </div>
             </div>
         </div>
       </form>
      </div>
      <div id="cadastramentoVeiculo" class="cadastro-veiculo-form content">
        <form action="" method="post">
          <div class="container-cadastro-espacos">
            <div class="container-cadastro-titulo titulo-primario">
                <h1>Cadastrar Veiculo</h1>
            </div>
            <div class="content-cadastro">
              <div class="container-cadastro-input">
                <label for="placa_veiculo">Placa</label>
                <input type="text" id="placa_veiculo" name="placa_veiculo">
              </div>
              <div class="container-cadastro-input">
                <label for="nome_proprietario">Nome Motorista</label>
                <input type="text" id="nome_proprietario" name="nome_proprietario">
              </div>
              <div class="container-cadastro-input">
                <label for="email">E-mail Motorista</label>
                <input type="text" id="email" name="email">
              </div>
              <div class="container-cadastro-titulo">
                <h1>Contato</h1>
              </div>
              <div class="container-cadastro-input">
                <label for="telefone1">Telefone</label>
                <input type="text" id="telefone1" name="telefone1">
              </div>
              <div class="container-cadastro-input">
                <label for="Tipo">Tipo</label>
                <select id="Tipo" name="Tipo">
                  <option>Selecionar tipo</option>
                  <option>Fixo</option>
                  <option>Celular</option>
                  <option>WhatsApp</option>
                </select>
              </div>
              <div class="container-cadastro-titulo">
                <h1>Veiculo</h1>
              </div>
              <div class="container-cadastro-input">
                <label for="Veiculo">Veiculo</label>
                <select id="Veiculo" name="Veiculo">
                  <option>Veiculo</option>
                </select>
              </div>
              <div class="container-cadastro-input">
                <label for="carroceria_veiculo">Carroceria</label>
                <select id="carroceria_veiculo" name="carroceria_veiculo">
                  <option>Selecionar carroceria</option>
                </select>
              </div>
              <div class="container-cadastro-input">
                <label for="Rastreador">Rastreador</label>
                <select id="Rastreador" name="Rastreador">
                  <option>Não</option>
                  <option>Sim</option>
                </select>
              </div>
              <div class="container-cadastro-input">
                <label for="Marca">Marca</label>
                <select id="Marca" name="Marca">
                  <option>Selecionar marca</option>
                </select>
              </div>

              <div class="container-cadastro-input">
                <label for="Ano">Ano</label>
                <select id="Ano" name="Ano">
                  <option>Selecionar Ano</option>
                </select>
              </div>
              <div class="container-cadastro-input">
                <label for="RNTRC">RNTRC</label>
                <input type="number" id="RNTRC" name="RNTRC ">
              </div>
              <div class="container-cadastro-input">
                <label for="permissao">Permissionado (trafegar no Mercosul)</label>
                <select id="permissao" name="Rastreador">
                  <option>Não</option>
                  <option>Sim</option>
                </select>
              </div>
              <div class="container-cadastro-titulo">
                <h1>Autentificação</h1>
              </div>
              <div class="container-cadastro-input">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
              </div>
              <div class="container-cadastro-input">
                <label for="confirmar_senha">Confirmar senha</label>
                <input type="number" id="confirmar_senha" name="confirmar_senha">
              </div>
              <div class="container-cadastro-input-submit">
                <input type="submit" value="Cadastrar Veículo">
              </div>
            </div>
        </div>
      </form>
     </div>
    </main>
    <div class="clear"></div>
    <div class="borderred"></div>
    <?php include('componentes/footer.inc'); ?>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/actionComplemento.js"></script>
    <script type="text/javascript" src="public/js/menu_mobile.js"></script>
  </body>
</html>
