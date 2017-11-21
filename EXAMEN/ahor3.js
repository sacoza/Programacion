//Variables
var solucion=[];
var condicion=true;
var aciertos=0;
var intentos=0;
//array
var palabra=["hola","hora","perro","algo","sapo"];
var aleat=Math.floor(Math.random()*palabra.length);
var adivinar=palabra[aleat];
console.log(adivinar);

for (var i = 0; i < adivinar.length; i++) {
  solucion[i]='0';
  console.log(i);
}
//intentos
intentos=prompt("¿Cuantos intentos quieres entre 5 y 10?");

if (intentos>=5 && intentos<=10 || Number.isNaN()) {
  while (intentos>=5 && intentos<=10 && aciertos<adivinar.length) {
    condicion=true;
        var letra=prompt("Inroduce una letra: ");

        while (condicion) {
             if (isNaN(letra)) {
               condicion=false;
             } else {
                 var letra = prompt("Introduce un letra, no un numero:");
                condicion=true;
               }
             }
             //Rendirse
             if (letra=="FIN") {
                   alert("Te rendiste");
                   intentos=0;
                 }
  var acertado=false;
for (var i = 0; i < adivinar.length; i++) {

  if (letra==adivinar.charAt(i)) {
    solucion[i]=adivinar.charAt(i);
    acertado=true;
    aciertos++;
    console.log(aciertos);
  }
  //Comodín
  if (letra=="COMODIN") {
    var letraleat=Math.floor(Math.random(adivinar.charAt(i)));
    letra=letraleat;
  }
}

if (acertado==true) {
  alert("Correcto")
}else{
  intentos++;
  alert("Fallo")
  }
}
if (aciertos==adivinar.length) {
  document.write(adivinar);
  document.write("<br> </br>");
  document.write("Ganaste");
}else{
    document.write("Perdiste");
}
}else {
  alert("Los intentos deben ser entre 5 y 10");
}

console.log(solucion);
