// JavaScript Document
onload=init;

function init(){
	updateCart();
	document.getElementById('sides_btn_1').onclick = function(){Sides1();};
	document.getElementById('sides_btn_2').onclick = function(){Sides2();};
	document.getElementById('sides_btn_3').onclick = function(){Sides3();};


}

function Sides1(){
	createCookie('Sides Name','Fries',0);
	createCookie('Sides Price','2.99',0);
	createCookie('SidesSmallImg','FriesSmall1.png',0);
	createCookie('SidesCompImg','FriesLarge1.png',0);
	updateCart();
}

function Sides2(){
	createCookie('Sides Name','Chips',0);
	createCookie('Sides Price','2.99',0);
	createCookie('SidesSmallImg','ChipsSmall1.png',0);
	createCookie('SidesCompImg','ChipsLarge1.png',0);
	updateCart();
}

function Sides3(){
	createCookie('Sides Name','Carrots',0);
	createCookie('Sides Price','2.99',0);
	createCookie('SidesSmallImg','CarrotsSmall1.png',0);
	createCookie('SidesCompImg','CarrotsLarge1.png',0);
	updateCart();
}


