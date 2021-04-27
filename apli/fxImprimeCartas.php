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

                        <header class=encabezadocarta style=background-color:{$valor->colorbase}>
                            <h1> {$valor-> nombre} </h1>
                            <div>";
                            if($valor-> cantmanainc != ""){
                                echo "<img class=imgmana src={$valor-> cantmanainc}>";
                            }
                            if($valor-> mana1 != ""){
                                for($i=0; $i<$valor-> cantmana1; $i++){
                                    echo "<img class=imgmana src={$valor-> mana1}>";
                                }
                            }
                            if($valor-> mana2 != ""){
                                for($i=0; $i<$valor-> cantmana2; $i++){
                                    echo "<img class=imgmana src={$valor-> mana2}>";
                                }  
                            }
                            echo "             
                            </div>
                        </header>

                        <section class=seccionimagen>
                            <img class=imgcarta src={$valor-> img}>
                            
                            {$valor-> shiny}
                            {$valor-> imgtierra}
                        </section>

                        <section class=secciontiposubtipocarta style=background-color:{$valor->colorbase}>

                            <ol>
                                <li class=itemtipo>
                                    {$valor-> tipo} 
                                </li>
                                -
                                <li class=itemsubtipo>
                                    {$valor-> tipoespecifico}
                                </li>
                            </ol>
                            <img class=imgexpansion src={$valor-> expansion}>

                        </section>
                        
                        <section class=secciondescripcioncarta style=background-color:{$valor->colorbase}>
                            <ol>
                                <li class=itemhabilidad>
                                    {$valor-> habilidad}
                                </li>
                                <li class=itemtextambiente>
                                    {$valor-> textambiente}
                                </li>
                            </ol>
                        </section>
                        
                        <section class=seccionfuerzaresistencia style=background-color:{$valor->colorbase}>
                            <ol>
                                <li class=itemfuerza>
                                    {$valor-> fuerza}
                                </li>
                                /
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
                                <li class=itemnumcoleccion>
                                    <p>numero:{$valor-> numcoleccion}</p>
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