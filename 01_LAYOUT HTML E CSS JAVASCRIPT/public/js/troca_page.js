     $(document).ready(function(){


    $('ul li').click(function(){
    var tab_id = $(this).attr('data-tab');

      $('ul  li').removeClass('trocar_display');
       $('ul li').removeClass('tab_header2');
      $('.tirar_display').removeClass('trocar_display');

      $(this).addClass('trocar_display');
      $("#"+tab_id).addClass('trocar_display');
      $(this).addClass('tab_header2');
      $(this).addClass('active');
    })

  })
