
const thumbnail = document.querySelectorAll(".thumbnail");
const cartas = document.querySelectorAll(".bordecarta");

/**
 * Esta funcion recorre todas las estructuras html
 * de las cartas mediante su clase .bordecarta
 * y a cada carta le cambia su propiedad css
 * opacity a valor 0, no visible.
 * 
 * @param cartas <contiene todas las estructuras HTML carta
 * del DOM>
 */
function ocultarTodo(){

    cartas.forEach( function( carta ){
        carta.style.opacity = 0;
        
    });

}
/**
 * Esta funcion oculta todas las cartas, y muestra solo
 * la carta asociada al evento click del thumbnail
 * 
 * Recorre todas las estructuras thumnail con clase
 * .thumbnail, a cada una se asocia un evento click que:
 * llama a ocultarTodo() y recorre todas las cartas, y para 
 * aquella que su id es igual a thumnail clicado *-1 
 * la hace visible mostrandose encima de los thumnails.
 */
thumbnail.forEach(function( thumb ){

    thumb.addEventListener( 'click' , function(){

        ocultarTodo();
        cartas.forEach( function( carta ){


            if( thumb.id == carta.id*-1 ){
                carta.style.opacity = 1;
                
            }
          
        });

    });

});
/**
 * Esta función oculta todas las cartas
 * 
 * Recorre todas las cartas del DOM y les aplica el 
 * evento click que al ejecutarlo llama a ocultarTodo()
 * ocultando todas la cartas y dejando solo los thumbnails
 * visibles.
 */
cartas.forEach( function(carta){

    carta.addEventListener( 'click' , function ( carta ){
        ocultarTodo();
    } );

});

/**
 * ordenación por nombre
 * 
 * recorro todos los thumnail y obtengo su atributo
 * name que corresponde a nombre de la carta magic, 
 * y su atributo tipo que corresponde al tipo de la carta
 * los ordeno en su vector contenedor.
 * 
 * ordenEstablecidoAsc orden natural BD
 * ordenEstablecidoDesc invertida
 * ordenAlfabeticoAsc orden natural BD ordenado alfabeticamente
 * ordenAlfabeticoDesc invertida
 * ordenTipoAsc orden alfabetico Asc por tipo de carta
 * ordenTipoDesc invertida
 */
const names = [];
const tipos= [];
let cont = 0;
thumbnail.forEach( function(thumb){
    
    names[cont] = thumb.getAttribute("name");
    tipos[cont] = thumb.getAttribute("tipo");
    cont++;
});
const ordenEstablecidoAsc = [...names];
const ordenEstablecidoDesc = [...names].reverse();
const ordenAlfabeticoAsc = names.sort();
const ordenAlfabeticoDesc = [...ordenAlfabeticoAsc].reverse();
const ordenTipoAsc = tipos.sort();
const ordenTipoDesc = [...tipos].reverse();