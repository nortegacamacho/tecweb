var valor;

valor = prompt('Introduzca un valor entre 1 y 5');
//Convertimos a entero

valor = parseInt(valor);

switch (valor){
    case 1: document.write('El valor es uno');
    break;

    case 2: document.write('El valor es dos');
    break;

    case 3: document.write('El valor es tres');
    break;

    case 4: document.write('El valor es cuatro');
    break;

    case 5: document.write('El valor es cinco');
    break;

    default: document.write('El valor introducido no es válido');
}
//switch: en lugar de poner un montón de if pegados uno detrás de otro,
// crea un menú de opciones directo y muy ordenado.
//break; sirve Para salir del menú inmediatamente después de haber dado la respuesta correcta.