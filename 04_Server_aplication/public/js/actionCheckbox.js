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
// FRETES DESATIVADOS
$('#check_all_disabled').click(function(){
  if ($( "input:checked" ).val()  == "fretes_all") {
  // SECTIONS FRETES
    let sectionsFretes = document.querySelectorAll('.fretes_desativados'),
      k = 0,
      ssize = sectionsFretes.length;
      while (k < ssize) {
        sectionsFretes[k].style.opacity = 1;
        k++;
      }
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
      let checks = document.querySelectorAll('.check_frete_disabled'),
          i = 0,
          csize = checks.length;
      while (i < csize) {
        checks[i].checked = true;
        i++;
      }
  }else{
    // SECTIONS FRETES
      let sectionsFretes = document.querySelectorAll('.fretes_desativados'),
        k = 0,
        ssize = sectionsFretes.length;
        while (k < ssize) {
          sectionsFretes[k].style.opacity =  0.6;
          k++;
        }
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
      let checks = document.querySelectorAll('.check_frete_disabled'),
          i = 0,
          csize = checks.length;

      while (i < csize) {
        checks[i].checked = false;
        i++;
      }
  }
});
