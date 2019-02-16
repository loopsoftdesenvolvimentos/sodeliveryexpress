
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
  hideNone('historia')
})
$('#btn-missao').click(function () {
  hideNone('missao')
})
