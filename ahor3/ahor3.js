var solucion=[];
var condicion=false;
var intentos=0;
var aciertos=0;
var palabra=["hola","aburro","perro","agarro","ahorro"];
var aleat=Math.floor(Math.random()*palabra.length);
var adivinar=palabra[aleat];

console.log(adivinar);
console.log(aleat);



for (var i = 0; i < adivinar.length; i++) {
  solucion[i]='0';

  console.log(i);
}

  while (intentos<5 && aciertos<adivinar.length) {
        var letra=prompt("Inroduce una letra: ");
        var acertado=false;

letra=prompt("Inroduce otra letra: ");
for (var i = 0; i < adivinar.length; i++) {
if (adivinar.charAt(i)==letra) {
solucion[i]=adivinar.charAt(i);
acertado=true;
aciertos++;
console.log(aciertos);
    }
    else{
    }
  }

if (acertado==true) {
  alert("Correcto")
}else{
  alert("Fallo")
  intentos++;
}
}

  document.write("La palabra es ",adivinar);


console.log(solucion);
