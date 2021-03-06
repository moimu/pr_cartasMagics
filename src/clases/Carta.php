<?php
declare(strict_types=1);

namespace Moi\Clases;
use InvalidArgumentException;
/**
 * Clase para instanciar cartas magic
 * 
 * Esta clase permite instanciar un objeto carta con todos
 * sus requerimientos, y gestionar estos parámetros descritos
 * en el constructor como atributos privados del objeto.
 * 
 * @param int idcarta <id de la carta>
 * @param string nombre <nombre de carta>
 * @param string fondo <url del fondo>
 * @param string shiny <url cover shiny>
 * @param string mana1 <url primer mana>
 * @param int cantmana1 <cantidad numero primer mana>
 * @param string mana2 <url segundo mana>
 * @param int cantmana2 <cantidad numero segundo mana>
 * @param string cantmanainc <url mana incoloro>
 * @param string img <url imagen carta>
 * @param string tipo <descripcion del tipo>
 * @param string tipoespecifico <descripcion tipo especifico>
 * @param string expansion <url expansión>
 * @param string habilidad <descripción de habilidades>
 * @param string imgtierra <imagen tierra>
 * @param string textambiente <descripción texto ambiente>
 * @param int fuerza <nivel de fuerza>
 * @param int resistencia <nivel de resistencia>
 * @param string artista <nombre creador ilustración carta>
 * @param int numcoleccion <numero correspondiente a expansion>
 * @param string colorbase <color bordes y ambiente>
 * @param int cantidad <cantidad de cartas>
 * 
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
    private int $cantidad;
    private string $background;

    public function __construct(
        $idcarta, $nombre, $fondo, $shiny, $mana1, $cantmana1, $mana2, $cantmana2, $cantmanainc,
        $img, $tipo, $tipoespecifico, $expansion, $habilidad, $imgtierra, $textambiente, $fuerza,
        $resistencia, $artista, $numcoleccion, $colorbase, $cantidad)
    {
        $this-> idcarta = $idcarta;  $this-> nombre = $nombre; $this-> fondo = $fondo;
        $this-> shiny = $shiny;
        $this-> mana1 = $mana1; $this-> cantmana1 = $cantmana1; $this-> mana2 = $mana2; 
        $this-> cantmana2 = $cantmana2; $this-> cantmanainc = $cantmanainc; $this-> img = $img;
        $this-> tipo = $tipo; $this-> tipoespecifico = $tipoespecifico;
        $this-> expansion = $expansion; $this-> habilidad = $habilidad; $this-> imgtierra = $imgtierra;
        $this-> textambiente = $textambiente; $this-> fuerza = $fuerza; $this-> resistencia = $resistencia;
        $this-> artista = $artista; $this-> numcoleccion = $numcoleccion; $this-> colorbase = $colorbase;
        $this-> cantidad = $cantidad;
        // resuelvo de esta manera para las cartas shiny, ya que no
        // consigo solapar de forma óptima
        if($this-> shiny == "img/fondos/shiny.png" ){
            $this->background = "{$this-> shiny}";
        }
        else{
            $this->background = "{$this-> fondo}";
        }
    }
    public function __toString(){
        return "id:   {$this-> idcarta}<br> nombre:   {$this-> nombre}<br> fondo:   {$this-> fondo}<br>
        shiny: {$this-> shiny}<br> colormana1: {$this-> mana1}<br> cantidad: {$this-> cantmana1}<br> 
        colormana2: {$this-> mana2}<br> cantidad: {$this-> cantmana2}<br>
        manainc: {$this-> cantmanainc}<br> imagen: {$this-> img}<br> 
        tipo: {$this-> tipo}<br> tipo especifico: {$this-> tipoespecifico}<br> expansión: {$this-> expansion}<br>
        habilidad: {$this-> habilidad}<br> imagen tierra: {$this-> imgtierra}<br> texto ambiente: {$this-> textambiente}<br>
        fuerza: {$this-> fuerza}<br> resistencia: {$this-> resistencia}<br>
        artista: {$this-> artista}<br> numero coleccion: {$this-> numcoleccion}<br>
        colorbase: {$this-> colorbase}<br> cantidad: {$this-> cantidad}<br><br>";
    }
    /**
     * Este método imprime la estructura html de la carta 
     * y sus respectivos datos para mostrar a cliente.
     * 
     * En div class="bordecarta" se guarda el id de la carta
     * en negativo, de esta manera es el reflejo del thumnail
     * donde se imprirá positivo, La estructura impresa por
     * este método estará oculta por defecto, y mediante 
     * el click a su thumnail id positivo, revelará su carta
     * igual id pero negativo.
     * Si el tipo de carta no es instantáneo o encantamiento
     * se imprirá la estructura para fuerza y resistencia.
     * 
     * @return string <Estructura html y datos de carta>           
     */
    public function imprime(){
        $idneg = $this-> idcarta*-1;
        
        echo "  
            
            <div class=bordecarta id=$idneg >
            <div class=cierrecarta> <p class=cierrecarta_p> X </p> </div>
                <div class=fondocarta style=background-image:url($this->background)>  
                    <article class=articulocarta>
                    
                        <header class=encabezadocarta borderojo style=background-color:{$this->colorbase}>
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
                            <img class=imgcarta src={$this-> img} alt={$this-> nombre} loading=lazy>
                        </section>

                        <section class=secciontiposubtipocarta style=background-color:{$this->colorbase} >

                            <ol>
                                <li class=itemtipo>
                                    {$this-> tipo} 
                                </li>
                            ";
                            if($this-> tipoespecifico ){
                                echo "-";
                            }
                            echo "    
                                <li class=itemsubtipo>
                                    {$this-> tipoespecifico}
                                </li>
                            </ol>
                            <img class=imgexpansion src={$this-> expansion}>

                        </section>

                        <section class=secciondescripcioncarta style=background-color:{$this->colorbase}>";
                        if($this-> imgtierra){
                            echo" <img class=imgtierra src={$this-> imgtierra} alt={$this-> nombre} loading=lazy> ";
                        }
                        echo"
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
                        if( $this->tipo !=="Instantáneo"&&$this->tipo!=="Encantamiento"
                            &&$this->tipo!=="Conjuro"&&$this->tipo!=="Artefacto"&&$this->tipo!=="Tierra" ){
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
    /**
     * El método thumnail imprime la estructura HTML del
     * thumnail con su datos correspondientes
     * 
     * El elemento section contiene el atributo name,
     * que se utiliza para ordenar mediante Javascript los
     * thumnail, atributo creado tipo, de igual manera se ordenan 
     * por su tipo, atributo id se utiliza para ordenar según 
     * vienen las cartas de la base de datos y atributo creado
     * cantidad para mostrar total de cartas y total de cartas
     * diferentes.
     * 
     * @return string <Estructura html del thumnail y datos carta>
     */
    public function thumbnail(){
        echo "
            <section class=thumbnail id={$this-> idcarta} name={$this->nombre}
                    tipo={$this->tipo} cantidad={$this-> cantidad}
                    style=background-image:url($this->background)>

                <header class=headerthumbnail> 
                    <h1> {$this->nombre} </h1>
                 </header>
                <main> 
                    <img class=imgthumbnail src={$this->img} alt={$this->nombre} loading=lazy> 
                </main>

            </section>
        ";
    }
    /**
     * Los siguientes métodos son creados exclusivamente 
     * para testear cada una de los parámetros o propiedades
     * de cada objeto carta, aunque también puedan ser utiizados 
     * para otros fines. 
     * 
     * @return <Cada uno de ellos devuelve el parámetro que refiere su nombre>
     */
    public function idcarta(){
        return $this->idcarta;
    }
    public function nombre(){
        return $this->nombre;
    }
    public function fondo(){
        return $this->fondo;
    }
    public function shiny(){
        return $this->shiny;
    }
    public function mana1(){
        return $this->mana1;
    }
    public function cantmana1(){
        return $this->cantmana1;
    }
    public function mana2(){
        return $this->mana2;
    }
    public function cantmana2(){
        return $this->cantmana2;
    }
    public function cantmanainc(){
        return $this->cantmanainc;
    }
    public function img(){
        return $this->img;
    }
    public function tipo(){
        return $this->tipo;
    }
    public function tipoespecifico(){
        return $this->tipoespecifico;
    }
    public function expansion(){
        return $this->expansion;
    }
    public function habilidad(){
        return $this->habilidad;
    }
    public function imgtierra(){
        return $this->imgtierra;
    }
    public function textambiente(){
        return $this->textambiente;
    }
    public function fuerza(){
        return $this->fuerza;
    }
    public function resistencia(){
        return $this->resistencia;
    }
    public function artista(){
        return $this->artista;
    }
    public function numcoleccion(){
        return $this->numcoleccion;
    }
    public function colorbase(){
        return $this->colorbase;
    }
    public function cantidad(){
        return $this->cantidad;
    }
}