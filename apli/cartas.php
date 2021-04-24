<?php

include('conexionBd.php');
include('cartaClass.php');


$sentencia = $db->prepare("SELECT car.`idcarta`,car.`nombre`,car.`fondo`,car.`mana1`,car.`cantmana1`,car.`mana2`,car.`cantmana2`,
car.`cantmanainc`,car.`img`,tip.`descripcion`,car.`tipoespecifico`,car.`expansion`,car.`habilidad`,car.`imgtierra`,
car.`textambiente`,car.`fuerza`,car.`resistencia`,car.`artista`,car.`numcoleccion`
FROM `cartas` car INNER JOIN `tipo` tip ON car.`idtipo`= tip.`idtipo` "); 

$sentencia -> execute();

$sentencia -> bind_result(
    $idcarta, $nombre ,$fondo, $mana1 , $cantmana1 ,$mana2,  $cantmana2,
    $cantmanainc, $img ,$tipo, $tipoespecifico , $expansion ,$habilidad,  $imgtierra,
    $textambiente, $fuerza ,$resistencia, $artista , $numcoleccion
);

$cont=0;
$objetos=[];
while($sentencia->fetch()){
    

    $nombre = new Carta($idcarta, $nombre ,$fondo, $mana1 , $cantmana1 ,$mana2,  $cantmana2,
    $cantmanainc, $img ,$tipo, $tipoespecifico , $expansion ,$habilidad,  $imgtierra,
    $textambiente, $fuerza ,$resistencia, $artista , $numcoleccion);

    $objetos[$cont] = $nombre;
    
    echo "$nombre";
    $cont++;
    // echo  "$idcarta, $nombre ,$fondo, $mana1 , $cantmana1 ,$mana2,  $cantmana2,
    // $cantmanainc, $img ,$idtipo, $tipoespecifico , $expansion ,$habilidad,  $imgtierra,
    // $textambiente, $fuerza ,$resistencia, $artista , $numcoleccion";

    echo "<br>";;
}

// Aqui el nombre de la carta ya no es objeto!!!!!!!!
// foreach($objetos as $clave=>$valor){
//     echo $valor;
// }



$sentencia->close();    
$db->close();


