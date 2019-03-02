<!DOCTYPE html>
<html>
    <?php include('componentes/head_administrativo_areacadastramento.inc');?>
  <body>
    <?php include('componentes/header_editarpaginas.inc'); ?>
    <main>
      <div id="editarPaginas" class="container-cadastro content">
        <div class="container-cadastro-titulo titulo-primario titulo-primario_area">
          <h1>Editar Páginas</h1>
        </div>
         <form action="" method="PUT">
           <div class="container-cadastro-espacos">
             <div class="content-cadastro">
               <div class="container-cadastro-input">
                 <label for="nome_site">Nome do Site</label>
                 <input type="text" name="nome_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="logo_site">Logo do Site</label>
                 <input type="file" name="logo_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="video_site">VÍDEO - Veja como funciona</label>
                 <input type="text" name="video_site">
               </div>
               <div class="container-cadastro-titulo">
                 <h1>Redes Sociais</h1>
               </div>
               <div class="container-cadastro-input">
                 <label for="email_site">Email</label>
                 <input type="text" name="email_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="telefone_site">Telefone</label>
                 <input type="text" name="telefone_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="facebook_site">Facebook</label>
                 <input type="text" name="facebook_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="instagram_site">Instagram</label>
                 <input type="text" name="instagram_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="linkedin_site">Linkedin</label>
                 <input type="text" name="linkedin_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="youtube_site">Youtube</label>
                 <input type="text" name="youtube_site">
               </div>
               <div class="container-cadastro-input">
                 <label for="skype_site">Skype</label>
                 <input type="text" name="skype_site">
               </div>
             </div>
             <div class="container-cadastro-input-button">
                 <input type="submit" value="Confirmar Edição">
             </div>
         </div>
       </form>
      </div>
      <div id="cadastrarDuvidas" class="container-cadastro content">
        <div class="container-cadastro-titulo titulo-primario titulo-primario_area">
          <h1>Cadastro Dúvidas</h1>
        </div>
         <form action="" method="PUT">
           <div class="container-cadastro-espacos">
             <div class="content-cadastro">
               <div class="container-cadastro-input">
                 <label for="pergunta">Pergunta</label>
                 <textarea name="pergunta"> </textarea>
               </div>
               <div class="container-cadastro-input">
                 <label for="resposta">Resposta</label>
                 <textarea name="resposta"></textarea>
               </div>
               <div class="container-cadastro-input">
                 <label for="extra">Assunto Extra</label>
                 <input type="text" name="extra">
               </div>
             <div class="container-cadastro-input-button">
                 <input type="submit" value="Cadastrar Dúvida">
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
