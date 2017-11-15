alert("¿Cual es la letra?");
var letra = prompt ("Escribe una letra: ");
var letraleat = String.fromCharCode(aleat(97,122));
var intentos =0;

function aleat(letraleat){
letraleat= 122 - 97 + 1;
aleat = Math.random() * letraleat;
aleat = Math.floor(aleat);
return parseInt(97) + aleat;
}
console.log(letraleat);

while ((letraleat != letra) && (intentos<4)) {
  letra = prompt("Escribe otra letra");
  intentos++;
}

if (letra == letraleat) {
  document.write ("Has ganado, la letra es la ", letraleat);
}else{
  document.write("Has perdido, la letra era la ", letraleat);
}
