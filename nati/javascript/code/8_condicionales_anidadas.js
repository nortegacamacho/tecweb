var nota1, nota2, nota3;
// Guarda cada nota en su correspondiente cajón: nota1, nota2 y nota3.

nota1 = prompt("Ingrese la primera nota: ");
nota2 = prompt("Ingrese la segunda nota: ");
nota3 = prompt("Ingrese la tercera nota: ");

// Convertir las notas a números enteros
nota1 = parseInt(nota1);
nota2 = parseInt(nota2);
nota3 = parseInt(nota3);
//parseint para asegurarse de que lo que hay escrito son números para hacer cuentas

var pro;
//en pro guarda el resultado de la cuenta
pro=(nota1+nota2+nota3)/3;
    if(pro>=7){
    document.write('promocionado');
} 
else {
    if(pro>=4){
        document.write('regular');
    } else {
        document.write('desaprobado');
 
    }
}
