var url_app = 'http://sodeliveryexpress.empresarial.ws/'; 

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
        $(input).blur(function() {
            $(id).css('display','none'); 
        });
    });*
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
check();
filtrar_input('input[name="search"]','#sumir');
select_populado('select[name="Origem"]','select[name="cidades"]','#sumir','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');
select_populado('select[name="Destino"]','select[name="Destino_cidades"]','#sumir1','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');
select_populado('select[name="estado_empresa"]','select[name="cidades_empresas"]','','/pages/empresas_filter/cidade/','/pages/empresas_filter/estados/');
select_populado_simples('select[name="Estados"]','select[name="Cidade"]');
select_populado('select[name="Origem_frete_estado"]','select[name="Origem_frete_cidade"]','#sumir','pages/frete_filter/cidade_origem/','pages/frete_filter/estado_origem/');
select_populado('select[name="Destino_frete_estado"]','select[name="Destino_frete_cidade"]','#sumir1','pages/frete_filter/cidade_saida/','pages/frete_filter/estado_saida/');


