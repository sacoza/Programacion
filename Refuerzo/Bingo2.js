//Variable
var condicion=true;
var aleatorio=[1,90];

var num = prompt("Introduce FIN cuando quieras:");
var aleat=Math.floor(Math.random()* (90-1)+1);
var adivinar=num[aleat];
//detener
            while (num!="FIN" && condicion==true) {
            alert("Escribe FIN tolai")
            num = prompt("Introduce FIN cuando quieras:");

}
if (num=="FIN") {
  alert("Tu numero es: " + aleat);
  condicion=false;

}
