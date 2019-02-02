class Media_screen{
	constructor(width) {
		this.width = window.matchMedia("(min-width: "+width+")");
	}
	responsive(){
		let mobile;
		if (this.width.matches) {
			return mobile = true;
		} else {
			return mobile = false;
		}
	}
}

// MENU NAV
 var logic = false;
 $('#btn-menu').click(function () {
   if (logic) {
     closeNav();
     return logic = false;
   }else{
		 closeEstVeiculos();
		 closeFilter();
     openNav();
    return  logic = true;
   }
 })

let icon = document.querySelector('.menu-mobile');

function openNav() {
	document.getElementsByTagName('nav')[0].style.display = "block";
}
function closeNav() {
	document.getElementsByTagName('nav')[0].style.display = "none";
}


// FILTER
var logic2 = true;
$('#btn-filter').click(function () {
	if (logic2) {
		closeNav()
 		openFilter()
		return logic2 = false;
	}else{
		closeFilter()
	 return  logic2 = true;
	}
})

function openFilter() {
	$('#filtro').animate({
		width: 'show'
	}, 200);
	location.href = '#filtro'
}
function closeFilter() {
	$('#filtro').animate({
		width: 'hide'
	}, 100)
}

// Estatisticas Veículos

var logic3 = true;
$('#btn-estatistica_veiculos').click(function () {
	if (logic3) {
		closeNav()
 		openEstVeiculos()
		return logic3 = false;
	}else{
		closeEstVeiculos()
	 return  logic3 = true;
	}
})

function openEstVeiculos() {
	$('#estatistica_veiculos').animate({
		width: 'show'
	}, 200);
	location.href = '#estatistica_veiculos'
}
function closeEstVeiculos() {
	$('#estatistica_veiculos').animate({
		width: 'hide'
	}, 100)
}
