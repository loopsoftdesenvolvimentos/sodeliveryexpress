function slideUpIn() {
  $("#login").velocity("transition.slideUpIn", 1250)
};

function slideLeftIn() {
  $(".row").velocity("transition.slideLeftIn", {stagger: 500})
}

function shake() {
  $(".password-row").velocity("callout.shake");
}

slideUpIn();
slideLeftIn();
$("button").on("click", function () {
  shake();
});

$('#btn-cadastrar').click(function() {
  $('.login-form').animate({
    width: 'hide'
  },500);
  $('.cadastrar-form').animate({
    width: 'show'
  },600);
})
$('#btn-voltar').click(function() {
  $('.cadastrar-form').animate({
    width: 'hide'
  },500);
  $('.login-form').animate({
    width: 'show'
  },600);
})
