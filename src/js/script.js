const thumbnail = document.querySelectorAll(".thumbnail");
const cartas = document.querySelectorAll(".bordecarta");
/**
 * Esta funcion recorre todas las estructuras html
 * de las cartas mediante su clase .bordecarta
 * y a cada carta le cambia su propiedad css
 * opacity a valor 0, no visible.
 * 
 * @param cartas <contiene todas las estructuras HTML 
 * con la clase .bordecarta del DOM>
 */
function ocultarTodo(){
    cartas.forEach( function( carta ){
        carta.style.opacity = 0;
        carta.style.zIndex = -1;

    });
}
/**
 * ocultarThumnails() y mostrarThumnails()
 * recorren todas las estructuras con clase .thumnail 
 * y las oculta o las muestra.
 */
function ocultarThumnails(){
    thumbnail.forEach( function( thumb ){
        thumb.style.opacity = 0;
    });
}
function mostrarThumnails(){
    thumbnail.forEach( function( thumb ){
        thumb.style.opacity = 1;
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
 * la hace visible mostrandose encima de los thumnails,
 * los thumnail son ocultados con ocultarThumnails()
 * 
 * @param thumbnail <contiene todas las estructuras HTML 
 * con la clase .thumbnail del DOM>
 */
thumbnail.forEach(function( thumb ){
    thumb.addEventListener( 'click' , function(){
        ocultarTodo();
        cartas.forEach( function( carta ){
            if( thumb.id == carta.id*-1 ){
                carta.style.opacity = 1; 
                carta.style.zIndex = 1; 
            }
        });
        ocultarThumnails();
    });
});
/**
 * Esta función oculta todas las cartas
 * 
 * Recorre todas las cartas del DOM y les aplica el 
 * evento click que al ejecutarlo llama a ocultarTodo()
 * ocultando todas la cartas y a ocultarThumnails()
 * dejando los thumbnails visibles.
 * 
 */
cartas.forEach( function(carta){
    carta.addEventListener( 'click' , function ( carta ){
        ocultarTodo();
        mostrarThumnails();
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
cont=0;

const ordenEstablecidoAsc = [...names];
const ordenEstablecidoDesc = [...names].reverse();
const ordenAlfabeticoAsc = names.sort();
const ordenAlfabeticoDesc = [...ordenAlfabeticoAsc].reverse();
const ordentipoAsc = tipos.sort();
const ordenTipoDesc = [...tipos].reverse();

/**
 * Declaro como constantes los buttom del DOM
 * para aplicar evento de click y aplicar propiedad
 * oreder a cada thumnail según se especifica en el array
 * de referencia ordenEstablecidoAsc ordenEstablecidoDesc..
 * 
 * La dinámica consiste en recorrer el array orden..
 * y para cada indice valor, recorrer todos los thumbnail
 * cuando el atributo name el thumnbail es igual, al valor
 * del array de orden, se asigna al thumbnail propiedad
 *  order = indice, ....
 *  
 * @param cont <contador incrementado que especifica 
 * el indice en array>
 */
const estAsc = document.getElementById("estAsc");
const estDesc = document.getElementById("estDesc");
const nomAsc = document.getElementById("nomAsc");
const nomDesc = document.getElementById("nomDesc");
const tipoAsc = document.getElementById("tipoAsc");
const tipoDesc = document.getElementById("tipoDesc");

estAsc.addEventListener( 'click' , function (){
    ordenEstablecidoAsc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("name") == ordenEstablecidoAsc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    });
    cont=0;
});
estDesc.addEventListener( 'click' , function (){
    ordenEstablecidoDesc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("name") == ordenEstablecidoDesc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    } );
    cont=0;
});
nomAsc.addEventListener( 'click' , function (){
    ordenAlfabeticoAsc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("name") == ordenAlfabeticoAsc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    } );  
    cont=0;
});
nomDesc.addEventListener( 'click' , function (){
    ordenAlfabeticoDesc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("name") == ordenAlfabeticoDesc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    });
    cont=0;
});
tipoAsc.addEventListener( 'click' , function (){  
    ordentipoAsc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("tipo") == ordentipoAsc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    } );  
    cont=0;
});
tipoDesc.addEventListener( 'click' , function (){  
    ordenTipoDesc.forEach( function(){
        thumbnail.forEach( function(thumb){
            if( thumb.getAttribute("tipo") == ordenTipoDesc[cont]){
                thumb.style.order = cont;
                cont++;
            }
        });
    } );  
    cont=0;
});
/**
 * Cartas en total que tenemos y 
 * cartas diferentes que tenemos.
 * 
 * recorremos todos los thumbnail y sumamos todas las
 * cantidades de cartas existentes para obtener :
 * totalcartas, En el forEach para todos los thumnail 
 * metemos contador totalcartasdif resultará total de 
 * cartas diferentes que tenemos.
 * 
*/
let totalcartas = 0;
let totalcartasdif = 0;
thumbnail.forEach( function(thumb){
    totalcartas = totalcartas + parseInt( thumb.getAttribute("cantidad") , 10);
    totalcartasdif++;
});