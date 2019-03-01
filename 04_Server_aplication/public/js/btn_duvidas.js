$('#btn-duvidas').click(function(){
  $( this ).addClass('menu_active');
  $('#btn-mandeDuvidas').removeClass('menu_active');

  $('#form-mandeDuvidas').hide();
  $('#container-duvidas').show();
});
$('#btn-mandeDuvidas').click(function(){
  $( this ).addClass('menu_active');
  $('#btn-duvidas').removeClass('menu_active');

  $('#container-duvidas').hide();
  $('#form-mandeDuvidas').show();
})
