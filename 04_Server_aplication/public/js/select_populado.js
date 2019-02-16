var url_app = 'http://localhost/sub/sodeliveryexpress/04_Server_aplication/'; 

function select_populado(select_1,select_2,id,url,url2) {
     $(document).ready(function() {
        $(select_1).on('change', function() {
            var Origem = $(this).val();
            if(Origem) {
                if(id != null){
                    $(id).css('display','flex'); 
                }             
                $.ajax({
                    url: url_app+'estados/cidades/'+Origem,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $(select_2).empty();
                        $(select_2).append('<option selected disabled>Selecionar cidade</option>');
                        $.each(data, function(key, value) {
                            $(select_2).append('<option value="'+ value.id_cidade +'">'+ value.nome_cidade +'/' +value.sigla_estads +'</option>');
                                $(select_2).on('change', function() {
                                $.ajax({
                                    url: url_app+url2+value.sigla_estads,
                                     type: "GET" 
                                });
                                if(value.id_cidade == ($(this).val())){
                                  window.location.href=url_app+url+value.nome_cidade;
                                }
                            });
                        });
                    }
                });
                
            }else{
                $(select_1).empty();
            }
        });
    });
}
function select_populado_simples(select_1,select_2) {
     $(document).ready(function() {
        $(select_1).on('change', function() {
            var Origem = $(this).val();
            if(Origem) {          
                $.ajax({
                    url: url_app+'estados/cidades/'+Origem,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $(select_2).empty();
                        $(select_2).append('<option selected disabled>Selecionar cidade</option>');
                        $.each(data, function(key, value) {
                            $(select_2).append('<option value="'+ value.id_cidade +'">'+ value.nome_cidade +'/' +value.sigla_estads +'</option>');
                        });
                    }
                });
                
            }else{
                $(select_1).empty();
            }
        });
    });
}
function filtrar_input(input,id) {
    $(input).click(function() {
        $(id).css('display','block'); 
        $(id).click(function() {
            var pesquisa = $(input).val();
            $.ajax({
            url: url_app+'pages/empresas_filter/pesquisas/'+pesquisa+'',
            type: "GET",
                success:function(data) {
                    window.location.href=url_app+'/pages/empresas_filter/pesquisas/'+pesquisa+'';
                }
            });
        });
    });
}

function check(){
    $(function(){
        $(".container-checkbox").click(function(){
              $('input[type="checkbox"]').on('change', function() {
                window.location.href = url_app + 'pages/frete_filter/precos/' + $(this).val();
              });
        }); 
    });   
}
function pesquisar_placa(button,id_btn_block){
    $(button).click(function() { 
        var pesquisa = $('#placa_veiculo').val().toUpperCase();
        if(pesquisa != ''){ 
            if(pesquisa.length == 7){
            $.ajax({
                    url: url_app+'pages/pesquisar_placa/' + pesquisa,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        if(data.length < 1){
                            $('#placa_veiculo').prop('readonly', true);
                            $(button).css('display','none');
                            $('#sumir').css('display','block');
                        }else{
                            $('#mensagem').css('display','block');
                            $('#mensagem p').html('Veiculo já cadastro !!!');     
                        }
                    }
                });
            }else{
               $('#mensagem').css('display','block');
               $('#mensagem p').html('Formatação de placa não conhecida, exemplo XXX1235');  
            }
        }else{
             $('#mensagem').css('display','block');
             $('#mensagem p').html('Digite a placa do veiculo !!');
        }
        setTimeout(function(){  
            $('#mensagem').css('display','none');
            $('#mensagem p').html();
        }, 3000);
    });
}   

function executar_forms(url,id_execucao,url_route,id_form){
     $(id_execucao).click(function(e){
        e.preventDefault();
        $.ajax({
            url: url,
            type:'POST',
            dataType: "json",
            data:  $(id_form).serialize(),
            success: function(data) {
                 if($.isEmptyObject(data.error)){
                    $('#mensagem').css('display','block');
                    $(id_form+'input').val("");
                    $('#mensagem').html(data.sucess);
                     setTimeout(function(){ 
                        window.location.href=url_app + url_route;
                      }, 3000);
                }else{
                    $('#mensagem').css('display','block');
                    $('#mensagem').html(data.error);
                }
            }
        });
    }); 
}   