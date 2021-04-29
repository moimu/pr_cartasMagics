<?php

    include('cartas.php');
    /**
     * Esta función devuelve los parámetros necesarios de los objetos carta contenidos en $array,
     * encapsulados en su estructura html para mostrar a cliente.
     * 
     * @param "$array" <contiene instanciados todos los objetos, con los datos de todas las cartas en BD>
     */
    function ImprimeCartas ($array){

        // imprime todas la cartas
        // foreach($array as $clave=>$valor){
        //    $valor->imprime();      
        // }

        // imprime thumbnail
        foreach($array as $clave=>$valor){
            $valor->thumbnail();      
        }
    }