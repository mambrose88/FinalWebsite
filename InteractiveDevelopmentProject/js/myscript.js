// JavaScript Document


function updateCart(){
	var price1=0;
	var price2=0;
	var price3=0;
	
	
	
	 if(readCookie('Buns Name') != null){
	document.getElementById("cart_buns_name").innerHTML=readCookie('Buns Name');
	document.getElementById("cart_buns_price").innerHTML='$'+readCookie('Buns Price');
	document.getElementById("cart_buns_image").innerHTML="<img src=\"Images/"+readCookie('BunsSmallImg')+"\" width=\"100\" height=\"100\">";
/*	document.getElementById("comp_buns_layer").innerHTML="<img src=\"Images/"+readCookie('BunsCompImg')+"\" width=\"200\" height=\"200\">";*/
	price1= parseFloat(readCookie("Buns Price"));

	}

		
 	if(readCookie('Sides Name') != null){
	document.getElementById("cart_sides_name").innerHTML=readCookie('Sides Name');
	document.getElementById("cart_sides_price").innerHTML='$'+readCookie('Sides Price');
	document.getElementById("cart_sides_image").innerHTML="<img src=\"Images/"+readCookie('SidesSmallImg')+"\" width=\"100\" height=\"100\">";
/*	document.getElementById("comp_sides_layer").innerHTML="<img src=\"Images/"+readCookie('SidesCompImg')+"\" width=\"200\" height=\"200\">";
*/	price2= parseFloat(readCookie("Sides Price"));
	}
	
	if(readCookie('Drinks Name') != null){
	document.getElementById("cart_drinks_name").innerHTML=readCookie('Drinks Name');
	document.getElementById("cart_drinks_price").innerHTML='$'+readCookie('Drinks Price');
	document.getElementById("cart_drinks_image").innerHTML="<img src=\"Images/"+readCookie('DrinksSmallImg')+"\" width=\"100\" height=\"100\">";
/*	document.getElementById("comp_drinks_layer").innerHTML="<img src=\"Images/"+readCookie('DrinksCompImg')+"\" width=\"200\" height=\"200\">";
*/	price3= parseFloat(readCookie("Drinks Price"));
	}

	
	var total= price1+price2+price3;
	
	document.getElementById("cart_total").innerHTML="$"+(Math.round(total*100)/100);

}



