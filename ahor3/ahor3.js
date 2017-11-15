var solucion=[];
var condicion=true;
var intentos=0;
var aciertos=0;
var palabra=["hola","hora","perro","algo","sapo"];
var aleat=Math.floor(Math.random()*palabra.length);
var adivinar=palabra[aleat];

console.log(adivinar);
console.log(aleat);



for (var i = 0; i < adivinar.length; i++) {
  solucion[i]='o';

  console.log(i);
}

  while (intentos<=5 && aciertos<adivinar.length) {
        var letra=prompt("Inroduce una letra: ");
        var acertado=false;

for (var i = 0; i < adivinar.length; i++) {
if (letra==adivinar.charAt(i)) {
solucion[i]=adivinar.charAt(i);
acertado=true;
i++;

console.log(aciertos);
    }
  }
aciertos++;
}



if (acertado==true) {
  alert("Correcto")
}else{
  alert("Fallo")
  intentos++;
}

if (acertado==true) {
  document.write("_");
}else {
  document.write(solucion);
}

console.log(solucion);
