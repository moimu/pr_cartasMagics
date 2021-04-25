<?php

    include('cartas.php');
    /**
     * Esta función devuelve los parámetros necesarios de los objetos carta contenidos en $array,
     * encapsulados en su estructura html para mostrar a cliente.
     * 
     * @param "$array" <contiene instanciados todos los objetos, con los datos de todas las cartas en BD>
     */
    function ImprimeCartas ($array){

        foreach($array as $clave=>$valor){
            
            echo "  
            <div class=bordecarta>
                <div class=fondocarta style=background-image:url({$valor-> fondo})>
                     
                    <article class=articulocarta>

                        <header class=encabezadocarta>
                            <h1> {$valor-> nombre} </h1>
                            <div>
                                <img class=imgmana src={$valor-> cantmanainc} >
                                <img class=imgmana src={$valor-> mana1} >
                                <img class=imgmana src={$valor-> cantmana1} >
                                <img class=imgmana src={$valor-> mana2} >
                                <img class=imgmana src={$valor-> cantmana2} >     
                            </div>
                        </header>

                        <section class=seccionimagen>
                            <img class=imgcarta src={$valor-> img}>
                            
                            {$valor-> shiny}
                            {$valor-> imgtierra}
                        </section>

                        <section class=secciontiposubtipocarta>
                            <ol>
                                <li class=itemtipo>
                                    {$valor-> tipo} 
                                </li>
                                
                                <li class=itemsubtipo>
                                   - {$valor-> tipoespecifico}
                                </li>
                                <li class=itemexpansion>
                                    <img class= src={$valor-> expansion}>
                                    
                                </li>
                            </ol>
                        </section>
                        
                        <section class=secciondescripcioncarta>
                            <ol>
                                <li class=itemhabilidad>
                                    {$valor-> habilidad}
                                </li>
                                <li class=itemtextambiente>
                                    {$valor-> textambiente}
                                </li>
                                <li class=itemfuerza>
                                    {$valor-> fuerza}
                                </li>
                                <li class=itemresistencia>
                                    {$valor-> resistencia}
                                </li>
                            </ol>
                        </section>
                        <footer class=piecarta>
                            <ol>
                                <li class=itemhabilidad>
                                    {$valor-> artista}
                                </li>
                                <li class=item>
                                    {$valor-> numcoleccion}
                                </li>
                            </ol>
                        </footer>

                    </article>
                </div>
            </div>
            ";
        }
    }

    // foreach($cartas as $clave=>$valor){
    //     echo "{$valor-> nombre}";
    // }
        
    // $valor-> nombre;
    // $valor-> fondo;
    // $valor-> shiny;
    // $valor-> mana1;
    // $valor-> cantmana1;
    // $valor-> mana2;
    // $valor-> cantmana2;
    // $valor-> cantmanainc;
    // $valor-> img;
    // $valor-> tipo;
    // $valor-> tipoespecifico;
    // $valor-> expansion;
    // $valor-> habilidad;
    // $valor-> imgtierra;
    // $valor-> textambiente;
    // $valor-> fuerza;
    // $valor-> resistencia;
    // $valor-> artista;
    // $valor-> numcoleccion;