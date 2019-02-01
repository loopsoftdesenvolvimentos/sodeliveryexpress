const botao_menu = document.querySelector('#botao_menu_forum');
const lista_menu = document.querySelector('#menu_forum');
document.querySelector('#menu_forum').style.display = 'none';

const logic = false;

botao_menu.onclick = function(){
	if(logic){
		fechaMenu();
	}else{
		abreMenu();
	}
}

function abreMenu(){
	document.querySelector('#menu_forum').style.display = 'block';
}

function fechaMenu(){
	document.querySelector('#menu_forum').style.display = 'none';
}