var x;

x = 1;

while(x <= 10)
{
    document.write(x);
    document.write('<br>')
    x = x + 1;
}
//Abres un cajón llamado x que te servirá de libreta para ir contando.
// Le pones de entrada la cifra 1 para empezar desde el principio.
//La palabra while en inglés significa "MIENTRAS".

//MIENTRAS el número que haya en el cajón x sea menor o igual a 10,
// quiero que repitas una y otra vez todo lo que hay dentro de las llaves { ... }".

//document.write(x);: Pinta en la pantalla el número que tenga guardado en la libreta
// en ese momento.

//document.write('<br>'): Pulsa la palanca del carro de la máquina de escribir para bajar
// a la línea de abajo y no amontonarlo todo

//x = x + 1; ¡EL PASO MÁS IMPORTANTE!
// Abre el cajón x, mira qué número hay, le suma 1 y vuelve a guardar el resultado
// Si no pusieras esta línea, el cajón valdría siempre 1,
// la condición de que es menor que 10 se cumpliría para siempre y el ordenador
// se quedaría colgado escribiendo unos infinitamente (lo que en programación llamamos un bucle infinito).