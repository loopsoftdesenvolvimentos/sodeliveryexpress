$('#btn-listFretes').click(function(){
  $( this ).addClass('menu_active');
  $('#btn-disabledFretes').removeClass('menu_active');

  $('#container-disabledFretes').hide();
  $('#container-listFretes').show();
});
$('#btn-disabledFretes').click(function(){
  $( this ).addClass('menu_active');
  $('#btn-listFretes').removeClass('menu_active');

  $('#container-listFretes').hide();
  $('#container-disabledFretes').show();
})
