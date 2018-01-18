//Variable
var palabra=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var boton=document.getElementById("button");
// Array
var array1 = ["hola","hora","perro","algo","sapo"];
aleatoria = Math.floor(Math.random()*(array1.length));
adivinar = array1[aleatoria];
console.log(adivinar);
// Estructuras de repeticion
for (var i = 0; i < adivinar.length; i++) {
    palabra[i]='_';
}
// Funciones
function comprobar() {
    var acertado=false;
    var entradatxt="";
    entradatxt = letra.value;
      if (isNaN(entradatxt)) {
        for (var i = 0; i < adivinar.length; i++) {
          if (adivinar.charAt(i)==entradatxt) {
            palabra[i]=adivinar.charAt(i);
            acertado=true;
            aciertos++;
        }
        salida2.value=palabra;
        if (aciertos>=adivinar.length) {
              salida2.value="Acertaste. La palabra y es: "+adivinar
              boton=document.getElementById("button").disabled=true;
        } else if (intentos>=4) {
              salida2.value="No lo conseguiste"
              boton=document.getElementById("button").disabled=true;
        }
            letra.value="";
        }
        if (acertado==true) {
              salida.value="Es correcta";
        } else {
              salida.value="No es correcta";
              intentos++;
              salida3.value=salida3.value+entradatxt+" ";
        }
         console.log(palabra);
         console.log(intentos);
      }  else {
            salida.value="Escribe una letra";

      }
  }
