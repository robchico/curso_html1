/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$( document ).ready(function() {
    
    
    $("#inicio").click(function (){
        window.open("newhtml.html",'_self');
       return false;
    });   
});
/**
 * leer cookie 
 * var x = document.cookie;
 * create
 * document.cookie = "username=John Smith; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/";
 * delete cookie
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;"; 
 */

function setCookie(cName, cValue, exDays) {
  var d = new Date();
  d.setTime(d.getTime() + (exDays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cName + "=" + cValue + ";" + expires + ";path=/";
  
}

function getCookie(cName) {
  var name = cName + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var username = getCookie("username");
  if (username != "") {
   alert("Welcome again " + username);
  } else {
    username = prompt("Please enter your name:", "");
    if (username != "" && username != null) {
      setCookie("username", username, 365);
    }
  }
}
 