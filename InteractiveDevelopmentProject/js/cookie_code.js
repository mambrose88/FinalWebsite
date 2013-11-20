// JavaScript Document

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	} /*else if the user didn't specify # of days until cookie expires, set it to expire when user closes browser */
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	//alert("readCookie");
	//concat an equals after the name (we’ll search for this string in all cookies)
	var nameEQ = name + "=";
		//. ca becomes an array containing all cookies that are set for this domain and path.
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		//If the first character is a space, remove it by using the substring() method. Repeat until not a space.
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		//search for the name. If found, return what follows ‘name=’ (the value)
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	//setting a cookie's expiration to -1 makes it delete immediately.
	createCookie(name,"",-1);
}
