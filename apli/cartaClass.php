<?php
declare(strict_types=1);
// namespace Moimu\;

/**
 * Clase para instanciar cartas magic
 * 
 * Esta clase permite instanciar un objeto carta con todos sus requerimientos, 
 * y gestionar estos parámetros como artributos del objeto
 * 
 * @param int idcarta <>
 * @param string nombre <>
 * @param string mana1 <>
 * @param int cantmana1 <>
 * @param string mana2 <>
 * @param int cantmana2 <>
 * @param int cantmanainc <>
 * 
 * @version 1.1 objeto carta
 * @autor Moises Antonio Munoz Aranda
 */
class Carta {

    private int $idcarta;
    private string $nombre;
    private string $fondo;
    private string $shiny;
    private string $mana1;
    private int $cantmana1;
    private string $mana2;
    private int $cantmana2;
    private string $cantmanainc;
    private string $img;
    private string $tipo;
    private string $tipoespecifico; 
    private string $expansion; 
    private string $habilidad;
    private string $imgtierra; 
    private string $textambiente;
    private int $fuerza;
    private int $resistencia;
    private string $artista;
    private int $numcoleccion;
    private string $colorbase;

    public function __construct(
        $idcarta, $nombre, $fondo, $shiny, $mana1, $cantmana1, $mana2, $cantmana2, $cantmanainc,
        $img, $tipo, $tipoespecifico, $expansion, $habilidad, $imgtierra, $textambiente, $fuerza,
        $resistencia, $artista, $numcoleccion, $colorbase)
    {
        $this-> idcarta = $idcarta;  $this-> nombre = $nombre; $this-> fondo = $fondo;
        $this-> shiny = $shiny;
        $this-> mana1 = $mana1; $this-> cantmana1 = $cantmana1; $this-> mana2 = $mana2; 
        $this-> cantmana2 = $cantmana2; $this-> cantmanainc = $cantmanainc; $this-> img = $img;
        $this-> tipo = $tipo; $this-> tipoespecifico = $tipoespecifico;
        $this-> expansion = $expansion; $this-> habilidad = $habilidad; $this-> imgtierra = $imgtierra;
        $this-> textambiente = $textambiente; $this-> fuerza = $fuerza; $this-> resistencia = $resistencia;
        $this-> artista = $artista; $this-> numcoleccion = $numcoleccion; $this-> colorbase = $colorbase;
    }
    public function __toString(){
        return "id:   {$this-> idcarta}<br> nombre:   {$this-> nombre}<br> fondo:   {$this-> fondo}<br>
        shiny: {$this-> shiny}<br> colormana1: {$this-> mana1}<br> cantidad: {$this-> cantmana1}<br> 
        colormana2: {$this-> mana2}<br> cantidad: {$this-> cantmana2}<br>
        manainc: {$this-> cantmanainc}<br> imagen: {$this-> img}<br> 
        tipo: {$this-> tipo}<br> tipo especifico: {$this-> tipoespecifico}<br> expansión: {$this-> expansion}<br>
        habilidad: {$this-> habilidad}<br> imagen tierra: {$this-> imgtierra}<br> texto ambiente: {$this-> textambiente}<br>
        fuerza: {$this-> fuerza}<br> resistencia: {$this-> resistencia}<br>
        artista: {$this-> artista}<br> numero coleccion: {$this-> numcoleccion}<br> colorbase: {$this-> colorbase}<br><br>";
    }
    /**
     * Este método imprime la estructura html de la carta 
     * y sus respectivos datos para mostrar a cliente.
     * 
     * @return string <modelo de la carta>
     */
    public function imprime(){
        $idneg = $this-> idcarta*-1;
        echo "  
            <div class=bordecarta id=$idneg>
                <div class=fondocarta style=background-image:url({$this-> fondo})>
                     
                    <article class=articulocarta>

                        <header class=\"encabezadocarta borderojo\" style=background-color:{$this->colorbase}>
                            <h1> {$this-> nombre} </h1>
                            <div>";
                            if($this-> cantmanainc != ""){
                                echo "<img class=imgmana src={$this-> cantmanainc}>";
                            }
                            if($this-> mana1 != ""){
                                for($i=0; $i<$this-> cantmana1; $i++){
                                    echo "<img class=imgmana src={$this-> mana1}>";
                                }
                            }
                            if($this-> mana2 != ""){
                                for($i=0; $i<$this-> cantmana2; $i++){
                                    echo "<img class=imgmana src={$this-> mana2}>";
                                }  
                            }
                            echo "             
                            </div>
                        </header>

                        <section class=seccionimagen>
                            <img class=imgcarta src={$this-> img}>
                            
                            {$this-> shiny}
                            {$this-> imgtierra}
                        </section>

                        <section class=secciontiposubtipocarta style=background-color:{$this->colorbase} >

                            <ol>
                                <li class=itemtipo>
                                    {$this-> tipo} 
                                </li>
                                -
                                <li class=itemsubtipo>
                                    {$this-> tipoespecifico}
                                </li>
                            </ol>
                            <img class=imgexpansion src={$this-> expansion}>

                        </section>
                        
                        <section class=secciondescripcioncarta style=background-color:{$this->colorbase}>
                            <ol>
                                <li class=itemhabilidad>
                                    {$this-> habilidad}
                                </li>
                                <li class=itemtextambiente>
                                    {$this-> textambiente}
                                </li>
                            </ol>
                        </section>
                        ";
                        if( $this-> tipo !== "Instantáneo" && $this-> tipo !== "Encantamiento" ){
                            echo "
                                <footer class=piecarta>
                                    <section class=seccionfuerzaresistencia style=background-color:{$this->colorbase} >
                                    <ol>
                                        <li class=itemfuerza>
                                            {$this-> fuerza}
                                        </li>
                                        /
                                        <li class=itemresistencia>
                                            {$this-> resistencia}
                                        </li>
                                    </ol>
                                    </section>
                                    <ol>
                                        <li class=itemhabilidad>
                                            {$this-> artista}   
                                        </li>
                                        <li class=itemnumcoleccion>
                                            <p>numero:{$this-> numcoleccion}</p>
                                        </li>
                                    </ol>
                                </footer>
                            ";
                        }
                        else{
                            echo "
                                <footer class=piecartav2>
                                    <ol>
                                        <li class=itemhabilidad>
                                            {$this-> artista}   
                                        </li>
                                        <li class=itemnumcoleccion>
                                            <p>numero:{$this-> numcoleccion}</p>
                                        </li>
                                    </ol>
                                </footer>
                            ";       
                        }
                        echo "    
                    </article>
                </div>
            </div>
        ";
    }
    public function thumbnail(){
        echo "
            <section class=thumbnail id={$this-> idcarta} name={$this->nombre} tipo={$this->tipo}>

                <header class=headerthumbnail> 
                    <h1> {$this->nombre} </h1>
                 </header>
                <main> 
                    <img class=imgthumbnail src={$this->img} alt={$this->nombre}> 
                </main>

            </section>
        ";
    }
    
}
