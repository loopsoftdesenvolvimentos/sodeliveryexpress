function select_populado(select_1,select_2,url,id) {
     $(document).ready(function() {
        $(select_1).on('change', function() {
            var Origem = $(this).val();
            if(Origem) {
              $(id).css('display','flex');
                $.ajax({
                    url: url+Origem,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $(select_2).empty();
                        $.each(data, function(key, value) {
                            $(select_2).append('<option value="'+ value.id_cidade +'">'+ value.nome_cidade +'</option>');
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




