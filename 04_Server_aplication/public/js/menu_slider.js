
function hideNone(target) {
    switch (target) {
      case 'historia':
        $('#historia').show();
        $('#missao').hide();
        $('#visao').hide();
        $('#valores').hide();
        $('#sobreNos').hide();
      break;
      case 'missao':
        $('#missao').show();
        $('#historia').hide();
        $('#visao').hide();
        $('#valores').hide();
        $('#sobreNos').hide();
      break;
      case 'visao':
        $('#visao').show();
        $('#historia').hide();
        $('#missao').hide();
        $('#valores').hide();
        $('#sobreNos').hide();
      break;
      case 'valores':
        $('#valores').show();
        $('#historia').hide();
        $('#missao').hide();
        $('#visao').hide();
        $('#sobreNos').hide();
      break;
      case 'sobreNos':
        $('#sobreNos').show();
        $('#historia').hide();
        $('#missao').hide();
        $('#visao').hide();
        $('#valores').hide();
      break;
    }
}

$('#btn-historia').click(function () {
  addSelecionado('#btn-historia')
  hideNone('historia')
})
$('#btn-missao').click(function () {
  addSelecionado('#btn-missao')
  hideNone('missao')
})
$('#btn-visao').click(function () {
  addSelecionado('#btn-visao')
  hideNone('visao')
})
$('#btn-valores').click(function () {
  addSelecionado('#btn-valores')
  hideNone('valores')
})
$('#btn-sobreNos').click(function () {
  addSelecionado('#btn-sobreNos')
  hideNone('sobreNos')
})

function addSelecionado(id) {
  let i = 0, objs = document.querySelectorAll('.btns');
  while (i < objs.length) {
    if (objs[i].className == 'btns selecionado') {
      objs[i].classList.remove('selecionado');
    }
    i++;
  }
  $(id).addClass('selecionado');
}
