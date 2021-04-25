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
    public string $nombre;
    public string $fondo;
    public string $shiny;
    public string $mana1;
    public int $cantmana1;
    public string $mana2;
    public int $cantmana2;
    public string $cantmanainc;
    public string $img;
    public string $tipo;
    public string $tipoespecifico; 
    public string $expansion; 
    public string $habilidad;
    public string $imgtierra; 
    public string $textambiente;
    public int $fuerza;
    public int $resistencia;
    public string $artista;
    public int $numcoleccion;

    public function __construct(
        $idcarta, $nombre, $fondo, $shiny, $mana1, $cantmana1, $mana2, $cantmana2, $cantmanainc,
        $img, $idtipo, $tipoespecifico, $expansion, $habilidad, $imgtierra, $textambiente, $fuerza,
        $resistencia, $artista, $numcoleccion)
    {
        $this-> idcarta = $idcarta;  $this-> nombre = $nombre; $this-> fondo = $fondo;
        $this-> shiny = $shiny;
        $this-> mana1 = $mana1; $this-> cantmana1 = $cantmana1; $this-> mana2 = $mana2; 
        $this-> cantmana2 = $cantmana2; $this-> cantmanainc = $cantmanainc; $this-> img = $img;
        $this-> idtipo = $idtipo; $this-> tipoespecifico = $tipoespecifico;
        $this-> expansion = $expansion; $this-> habilidad = $habilidad; $this-> imgtierra = $imgtierra;
        $this-> textambiente = $textambiente; $this-> fuerza = $fuerza; $this-> resistencia = $resistencia;
        $this-> artista = $artista; $this-> numcoleccion = $numcoleccion;
    }
    public function __toString(){
        return "id:   {$this-> idcarta}<br> nombre:   {$this-> nombre}<br> fondo:   {$this-> fondo}<br>
        shiny: {$this-> shiny}<br> colormana1: {$this-> mana1}<br> cantidad: {$this-> cantmana1}<br> 
        colormana2: {$this-> mana2}<br> cantidad: {$this-> cantmana2}<br>
        manainc: {$this-> cantmanainc}<br> imagen: {$this-> img}<br> 
        tipo: {$this-> idtipo}<br> tipo especifico: {$this-> tipoespecifico}<br> expansión: {$this-> expansion}<br>
        habilidad: {$this-> habilidad}<br> imagen tierra: {$this-> imgtierra}<br> texto ambiente: {$this-> textambiente}<br>
        fuerza: {$this-> fuerza}<br> resistencia: {$this-> resistencia}<br>
        artista: {$this-> artista}<br> numero coleccion: {$this-> numcoleccion}<br><br>";
    }
}