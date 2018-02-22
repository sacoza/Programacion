function validar() {
  var condicion=true;
  var vacio="";
//obteniendo el valor que se puso en el campo text del formulario
var miCampoTexto = document.getElementById("input").value;
//la condición
if (miCampoTexto=vacio) {
 condicion=false;
}
alert('Algún campo esta vacio');

condicion=true;
}
