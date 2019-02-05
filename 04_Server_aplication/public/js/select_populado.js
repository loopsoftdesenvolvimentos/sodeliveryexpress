function select_populado(select_1,select_2,url,id) {
     $(document).ready(function() {
        $(select_1).on('change', function() {
            var Origem = $(this).val();
            if(Origem) {
                if(id != null){
                    $(id).css('display','flex'); 
                }             
                $.ajax({
                    url: url+Origem,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $(select_2).empty();
                        $(select_2).append('<option selected disabled>Selecionar cidade</option>');
                        $.each(data, function(key, value) {
                            $(select_2).append('<option value="'+ value.id_cidade +'">'+ value.nome_cidade +'/' +value.sigla_estads +'</option>');
                            $(select_2).on('change', function() { 
                                $.ajax({
                                    url: 'http://localhost/sodeliveryexpress/04_Server_aplication/fretes/cidade/'+ value.nome_cidade,
                                    type: "GET",
                                     success:function(data) {
                                        window.location.href=window.location.href;
                                     }
                                 });
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
select_populado('select[name="Origem"]','select[name="cidades"]','http://localhost/sodeliveryexpress/04_Server_aplication/estados/cidades/','#sumir');
select_populado('select[name="Destino"]','select[name="Destino_cidades"]','http://localhost/sodeliveryexpress/04_Server_aplication/estados/cidades/','#sumir1');
select_populado('select[name="estado_empresa"]','select[name="cidades_empresas"]','http://localhost/sodeliveryexpress/04_Server_aplication/estados/cidades/','');





