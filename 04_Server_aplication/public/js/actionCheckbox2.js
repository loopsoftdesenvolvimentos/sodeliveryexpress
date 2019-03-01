// FRETES ATIVADOS
$('#check_all_activated').click(function(){
  if ($( "input:checked" ).val()  == "fretes_all") {
  // BUTTONS ACÕES FRETES
    let btns_actions = document.querySelectorAll('.btns_actions button'),
      j = 0,
      bsize = btns_actions.length;
      while (j < bsize) {
        btns_actions[j].disabled = false;
        btns_actions[j].style.opacity = 1;
        j++;
      }
    // CHECKBOXs
      let checks = document.querySelectorAll('.check_frete_activated'),
          i = 0,
          csize = checks.length;

      while (i < csize) {
        checks[i].checked = true;
        i++;
      }
  }else{
    // BUTTONS ACÕES FRETES
      let btns_actions = document.querySelectorAll('.btns_actions button'),
        j = 0,
        bsize = btns_actions.length;
        while (j < bsize) {
          btns_actions[j].disabled = true;
          btns_actions[j].style.opacity = 0.6;
          j++;
        }
    // CHECKBOXs
      let checks = document.querySelectorAll('.check_frete_activated'),
          i = 0,
          csize = checks.length;

      while (i < csize) {
        checks[i].checked = false;
        i++;
      }
  }
});
// VEICULOS
// FRETES ATIVADOS
$('#check_all_activated_veiculo').click(function(){
  if ($( "input:checked" ).val()  == "veiculos_all") {
  // BUTTONS ACÕES FRETES
    let btns_actions = document.querySelectorAll('.btns_veiculo button'),
      j = 0,
      bsize = btns_actions.length;
      while (j < bsize) {
        btns_actions[j].disabled = false;
        btns_actions[j].style.opacity = 1;
        j++;
      }
    // CHECKBOXs
      let checks = document.querySelectorAll('.check_veiculo_activated'),
          i = 0,
          csize = checks.length;

      while (i < csize) {
        checks[i].checked = true;
        i++;
      }
  }else{
    // BUTTONS ACÕES FRETES
      let btns_actions = document.querySelectorAll('.btns_veiculo button'),
        j = 0,
        bsize = btns_actions.length;
        while (j < bsize) {
          btns_actions[j].disabled = true;
          btns_actions[j].style.opacity = 0.6;
          j++;
        }
    // CHECKBOXs
      let checks = document.querySelectorAll('.check_veiculo_activated'),
          i = 0,
          csize = checks.length;

      while (i < csize) {
        checks[i].checked = false;
        i++;
      }
  }
});
