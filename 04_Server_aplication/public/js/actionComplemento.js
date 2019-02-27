$('#select_complemento').change(function () {
  if ($(this).val() == 'sim') {
    $('#complemento').show()
  }else{
    $('#complemento').hide()
  }
})
$('input[type="checkbox"]').click(function(){
  if ($( "input:checked" ).val()  == "Moto") {
    $('#content-moto').show();
  }else{
    $('#content-moto').hide();
  }
})
$('#select_pagamento').change(function() {
  if ($( this ).val() == "A combinar") {
    document.getElementById('input-preco').disabled = true;
    // $('#input-preco')
  }else {
    document.getElementById('input-preco').disabled = false;
  }
});
