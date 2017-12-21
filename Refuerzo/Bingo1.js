var num1;
var cadena1;
var cadena2;
var num2;


while (isNaN(num1)||isNaN(num2)||(num1==num2)||(num1%2!=0)||(num2%2!=0)) {
  cadena1=prompt("Dame el primer numero par");
  num1=parseInt(cadena1);
  cadena2=prompt("Dame el segundo numero par");
  num2=parseInt(cadena2);
  console.log(num1);
  console.log(num2);
}
console.log("Son pares");
