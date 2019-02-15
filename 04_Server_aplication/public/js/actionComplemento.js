$('#select_complemento').change(function () {
  if ($(this).val() == 'sim') {
    $('#complemento').show()
  }else{
    $('#complemento').hide()    
  }
})
