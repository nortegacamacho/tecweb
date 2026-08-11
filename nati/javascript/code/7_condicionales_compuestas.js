var num1;
var num2;

num1 = prompt('Introduzca el primer numero:');
num2 = prompt('Introduzca el segundo numero:');
num1 = parseInt(num1);
num2 = parseInt(num2);


if(num1>num2){
    document.write('El numero ' + num1 + ' es mayor que ' + num2);
} else if(num1==num2){
    document.write('Los numeros son iguales');
} else{
    document.write('El numero ' + num1 + ' es menor que ' + num2);
}