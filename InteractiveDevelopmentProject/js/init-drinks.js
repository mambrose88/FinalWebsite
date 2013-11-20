// JavaScript Document
onload=init;

function init(){
	updateCart();
	document.getElementById('drinks_btn_1').onclick = function(){Drinks1();};
	document.getElementById('drinks_btn_2').onclick = function(){Drinks2();};
	document.getElementById('drinks_btn_3').onclick = function(){Drinks3();};


}

function Drinks1(){
	createCookie('Drinks Name','Dr. Pepper',0);
	createCookie('Drinks Price','.99',0);
	createCookie('DrinksSmallImg','DrinksSmall1.png',0);
	createCookie('DrinksCompImg','DrinksLarge1.png',0);
	updateCart();
}

function Drinks2(){
	createCookie('Drinks Name','Fruit Punch',0);
	createCookie('Drinks Price','.99',0);
	createCookie('DrinksSmallImg','DrinksSmall2.png',0);
	createCookie('DrinksCompImg','DrinksLarge2.png',0);
	updateCart();
}

function Drinks3(){
	createCookie('Drinks Name','Water',0);
	createCookie('Drinks Price','.99',0);
	createCookie('DrinksSmallImg','DrinksSmall3.png',0);
	createCookie('DrinksCompImg','DrinksLarge3.png',0);
	updateCart();
}
