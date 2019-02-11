function mensagem(mensagem) {
    alert(mensagem);
}
function mensagem_carregamento_campos(...dados){
    if(dados.length == 1){
        for (var i = 0; i < dados.length; i++) {
             $("#Endereço").val(dados[i]);
             $("#Bairro").val(dados[i]);
        }
    }
    if(dados.length == 2){
        $("#Endereço").val(dados[0]);
        $("#Bairro").val(dados[1]);
    }

    if(dados.length > 4){
        mensagem();
    }
    if(dados.length == 0){
        $("#Endereço").val('');
        $("#Bairro").val('');
    }
}
function buscar_cep(cep){
     $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
        if (!("erro" in dados)) {
            mensagem_carregamento_campos(dados.logradouro,dados.bairro);
        }
        else {
           mensagem_carregamento_campos();
        }
    });
}

$(document).ready(function() {
   $('#CEP').blur(function() {
        let cep = $(this).val().replace(/\D/g, '');
        let validacep = /^[0-9]{8}$/;
        if(cep != null){
              if(validacep.test(cep)) {
                mensagem_carregamento_campos('Buscando campos');
                buscar_cep(cep);
              }else{
                mensagem_carregamento_campos();
              }
        }else{
            mensagem('Ação não permitida');
        }
   })
})