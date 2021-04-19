<?php
declare(strict_types=1);
// namespace Moimu\;

class carta {

    private int $idcarta;
    private string $nombre;
    private string $mana1;
    private int $cantmana1;
    private string $mana2;
    private int $cantmana2;
    private int $cantmanainc;
    private string $img;
    private int $idtipo;
    private int $idtipoespecifico;
    private int $habilidad;
    private string $textambiente;
    private int $fuerza;
    private int $resistencia;
    private string $artista;
    private int $numcoleccion;

    public function __construct(
        $idcarta, $nombre, $mana1, $cantmana1, $mana2, $cantmana2, $cantmanainc,
        $img, $idtipo, $idtipoespecifico, $habilidad, $textambiente, $fuerza,
        $resistencia, $artista, $numcoleccion)
    {

        $this-> idcarta = $idcarta; $this-> nombre = $nombre;
        $this-> mana1 = $mana1; $this-> cantmana1 = $cantmana1; 
        $this-> mana2 = $mana2; $this-> cantmana2 = $cantmana2;
        $this-> cantmanainc = $cantmanainc; $this-> img = $img;
        $this-> idtipo = $idtipo; $this-> idtipoespecifico = $idtipoespecifico;
        $this-> habilidad = $habilidad; $this-> textambiente = $textambiente;
        $this-> fuerza = $fuerza; $this-> resistencia = $resistencia;
        $this-> artista = $artista; $this-> numcoleccion = $numcoleccion;
    }
}