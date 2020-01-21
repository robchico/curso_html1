$(document).ready(function () {


    //checkCookie();


    // alert("La resolución de tu pantalla es: " + screen.width + " x " + screen.height);
    // alert("ancho ventana: " + $(window).width() + " x " + $(window).height());


    $("#enviar").click(function (e) {
        e.preventDefault();
        var dataString = $('#formContacto').serialize();
        alert('Datos serializados: ' + dataString);
        $("#email").focus(); 
        
    });

   

});


/*temporizador*/
var n = 0;
var l = document.getElementById("number");
window.setInterval(function(){
  l.innerHTML = n;
  n++;
},1000);