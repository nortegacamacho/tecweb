var nombre;
var nota;

nombre = prompt('Introduzca su nombre: ');
nota = prompt('Introduzca su nota: ');

if(parseInt(nota) >= 5){
    document.write('Hola ' + nombre + ', esta aprobado con un ' + nota);
} else{
    document.write('Hola ' + nombre + ', esta suspenso con un ' + nota);
}