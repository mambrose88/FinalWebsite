// JavaScript Document
onload=init;

function init(){
	updateCart();
	document.getElementById('buns_btn_1').onclick = function(){buns1();};
	document.getElementById('buns_btn_2').onclick = function(){buns2();};
	document.getElementById('buns_btn_3').onclick = function(){buns3();};

}

function buns1(){
	createCookie('Buns Name','Wheat Bun',0);
	createCookie('Buns Price','2.99',0);
	createCookie('BunsSmallImg','Burger1small.png',0);
	createCookie('BunsCompImg','Burger1large.png',0);
	updateCart();
}

function buns2(){
	createCookie('Buns Name','White Bun',0);
	createCookie('Buns Price','2.99',0);
	createCookie('BunsSmallImg','Burger2small.png',0);
	createCookie('BunsCompImg','Burger2large.png',0);
	updateCart();
}

function buns3(){
	createCookie('Buns Name','Rye Bun',0);
	createCookie('Buns Price','2.99',0);
	createCookie('BunsSmallImg','Burger3small.png',0);
	createCookie('BunsCompImg','Burger3large.png',0);
	updateCart();
}



