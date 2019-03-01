<!DOCTYPE html>
<html>
    <?php include('componentes/head_administrativo_areacadastramento.inc');?>
  <body>
    <?php include('componentes/header_administrativo_areas.inc'); ?>
    <main>
      <div id="cadastramentoFretes" class="container-cadastro content">
        <div class="container-cadastro-titulo titulo-primario titulo-primario_area">
          <h1>Área de Cadastramento</h1>
        </div>
         <form action="" method="post">
           <div class="container-cadastro-espacos">
             <div class="container-cadastro-titulo">
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
                   <option value="Metro Cúbico">Metro Cúbico</option>
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
                     <input type="text" name="qtd_volume_complemento" >
                   </div>
                   <div class="container-cadastro-input">
                     <label for="peso_complemento">Peso em KG</label>
                     <input type="text" name="peso_complemento" >
                   </div>
                   <div class="container-cadastro-input">
                     <label for="volume">Volume m³</label>
                     <input type="text" name="volume_complemento" >
                   </div>
                 </div>
               </div>
               <div class="container-cadastro-input">
                 <div class="row">
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="leve">Leve</label>
                     <label class="container-checkbox">Moto
                       <input id="check-moto" type="checkbox" name="veiculo_categoria" value='Moto'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Fiorinos
                       <input type="checkbox" name="veiculo_categoria" value='Fiorinos'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">HR
                       <input type="checkbox" name="veiculo_categoria" value='HR'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Master
                       <input type="checkbox" name="veiculo_categoria" value='Master'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Toco
                       <input type="checkbox" name="veiculo_categoria" value='Toco'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">VLC
                       <input type="checkbox" name="veiculo_categoria" value='VLC'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">3/4
                       <input type="checkbox" name="veiculo_categoria" value='3/4'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="medio">Médio</label>
                     <label class="container-checkbox">Truck
                       <input type="checkbox" name="veiculo_categoria" value='Truck'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Bitruck
                       <input type="checkbox" name="veiculo_categoria" value='Bitruck'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="pesado">Pesado</label>
                     <label class="container-checkbox">Rodotrem
                       <input type="checkbox" name="veiculo_categoria" value='Rodotrem'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Vanderléria
                       <input type="checkbox" name="veiculo_categoria" value='Vanderléria'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Bitrem
                       <input type="checkbox" name="veiculo_categoria" value='Bitrem'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Carreta LS
                       <input type="checkbox" name="veiculo_categoria" value='Carreta LS'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Carreta
                       <input type="checkbox" name="veiculo_categoria" value='Carreta'>
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
                       <input type="checkbox" name="carroceria" value='Baú'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Baú Frigorífico
                       <input type="checkbox" name="carroceria" value='Baú Frigorífico'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Slider
                       <input type="checkbox" name="carroceria" value='Slider'>
                       <span class="checkmark"></span>
                     </label>
                     <div id="content-moto">
                       <label class="container-checkbox">Mochila(Moto)
                         <input type="checkbox" name="carroceria" value='Mochila(moto)'>
                         <span class="checkmark"></span>
                       </label>
                       <label class="container-checkbox">Baú
                         <input type="checkbox" name="carroceria" value='Baú(moto)'>
                         <span class="checkmark"></span>
                       </label>
                     </div>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="medio">Aberta</label>
                     <label class="container-checkbox">Caçamba
                       <input type="checkbox" name="carroceria" value='Caçamba'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Grande Baixa
                       <input type="checkbox" name="carroceria" value='Grande Baixa'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Graneleiro
                       <input type="checkbox" name="carroceria" value='Graneleiro'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Prancha
                       <input type="checkbox" name="carroceria" value='Prancha'>
                       <span class="checkmark"></span>
                     </label>
                   </div>
                   <div class="container-cadastro-input fretes-checkbox">
                     <label for="pesado">Especial</label>
                     <label class="container-checkbox">Bug Porta Container
                       <input type="checkbox" name="carroceria" value='Bug Porta Container'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Munk
                       <input type="checkbox" name="carroceria" value='Munk'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Silo
                       <input type="checkbox" name="carroceria" value='Silo'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Tanque
                       <input type="checkbox" name="carroceria" value='Tanque'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Gaiola
                       <input type="checkbox" name="carroceria" value='Gaiola'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Cegonheiro
                       <input type="checkbox" name="carroceria" value='Cegonheiro'>
                       <span class="checkmark"></span>
                     </label>
                     <label class="container-checkbox">Apenas Cavalo
                       <input type="checkbox" name="carroceria" value='Apenas Cavalo'>
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
                    <input type="text" id="input-preco" name="preco" value="">
                   </div>
                   <div class="container-cadastro-input">
                     <label for="preco">Tipo pagamento</label>
                     <select id="select_pagamento" name="tipo_pagamento">
                       <option disabled selected>Selecione uma opção abaixo</option>
                       <option value="porTonelada">Por Tonelada</option>
                       <option value="cheio">Cheio</option>
                       <option value="A combinar">A Combinar</option>
                       <option value="Km/R$">Km/R$</option>
                     </select>
                   </div>
                   <div class="container-cadastro-input extraCheck">
                     <label class="container-checkbox">Pedágio
                       <input type="checkbox" name='pegadio' value='Pedágio'>
                       <span class="checkmark"></span>
                     </label>
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
     </div>
     <div class="clear"></div>
    </main>
    <?php include('componentes/footer.inc'); ?>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/actionComplemento.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>public/js/menu_mobile.js"></script>
  </body>
</html>
