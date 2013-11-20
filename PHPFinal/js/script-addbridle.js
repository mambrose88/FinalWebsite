// JavaScript Document
/*alert("Starting");*/
onload=init;
function init(){
	/*alert("init");*/
	document.forms[0].onsubmit=function(){return submit_add_bridle();};
}

function submit_add_bridle(){
	/*alert("submit_add_bridle"+document.getElementsByName('uprice')[0].value);*/
	//set up a var to be returned TRUE or FALSE at end of function
 var ok_to_submit = true;
 //if user left bridle name slot blank
 	if (document.getElementsByName('ubridle')[0].value == ""){
	
	document.getElementById('bridleFeedback').innerHTML = "you forgot to type a Bridle Name";
	ok_to_submit = false;
	}
 		//if user puts something thats NOT A NUMBER price slot...
 	 	if ( ( isNaN(document.getElementsByName('uprice')[0].value)) || (document.getElementsByName('uprice')[0].value == "" ) ){
	document.getElementById('PriceFeedback').innerHTML = "Price must be a number";
	ok_to_submit = false;
	}
//if true is returned, form does its action normally
 return ok_to_submit;

};