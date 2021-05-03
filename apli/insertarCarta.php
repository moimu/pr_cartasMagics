<?php
$nombre = $_POST["nombre"];
$idfondo = $_POST["idfondo"];
$colorbase = $_POST["colorbase"];
$idshiny = $_POST["idshiny"];
$idmana1 = $_POST["idmana1"];
$cantmana1 = $_POST["cantmana1"];
$idmana2 = $_POST["idmana2"];
$cantmana2 = $_POST["cantmana2"];
$idmanaincoloro = $_POST["idmanaincoloro"] +1;
$img = $_POST["img"];
$idtipo = $_POST["idtipo"];
$tipoespecifico = $_POST["tipoespecifico"];
$idimgtierra = $_POST["idimgtierra"];
$idexpansion = $_POST["idexpansion"];
$habilidad = $_POST["habilidad"];
$textambiente = $_POST["textambiente"];
$fuerza = $_POST["fuerza"];
$resistencia = $_POST["resistencia"];
$artista = $_POST["artista"];
$numcoleccion = $_POST["numcoleccion"];

echo "
nombre: $nombre<br> idfondo: $idfondo<br>
colorbase: $colorbase<br> idshiny: $idshiny<br> 
idmana1: $idmana1<br> cantmana1: $cantmana1<br>
idmana2: $idmana2<br> cantmana2: $cantmana2<br>
idmanaincoloro: $idmanaincoloro <br>img: $img <br>
idtipo: $idtipo <br>tipoespecifico: $tipoespecifico <br>
idimgtierra: $idimgtierra <br> idexpansion: $idexpansion <br>
habilidad: $habilidad <br> textambiente: $textambiente <br>
fuerza: $fuerza<br> resistencia: $resistencia<br>
artista: $artista<br> numcoleccion: $numcoleccion
";
$var=[$nombre, 
$idfondo, 
$colorbase ,
$idshiny ,
$idmana1 ,
$cantmana1 ,
$idmana2 ,
$cantmana2 ,
$idmanaincoloro,
$img ,
$idtipo ,
$tipoespecifico,
$idimgtierra ,
$idexpansion ,
$habilidad ,
$textambiente,
$fuerza,
$resistencia,
$artista,
$numcoleccion ];
var_dump($var);

include('conexionBd.php');


if(isset($_POST['nombreCompleto'])){

    /*   consulto por el nombre si hay una de igual nombre update cantidad a +1  */
    $sentencia = $db->prepare("
        INSERT INTO `cartas`
        (`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
        `cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
        `idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
        `resistencia`,`artista`,`numcoleccion`,`colorbase`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)  
    "); 
    $sentencia ->bind_param('isssi', $param1, $param2,
    $param3, $param4, $param5,$param6, $param7, $param8,
    $param9, $param10, $param11, $param12, $param13,
    $param14, $param15, $param16, $param17, $param18,
    $param19, $param20
    );
    
    $param1 = $nombre ; $param2 = $idfondo ;
    $param3 = $idshiny ; $param4 = $idmana1 ;
    $param5 = $cantmana1 ; $param6 = $idmana2 ;
    $param7 = $cantmana2 ; $param8 = $idmanaincoloro ;
    $param9 = $img ; $param10 = $idtipo ;
    $param11 = $tipoespecifico ; $param12 = $idexpansion ;
    $param13 = $habilidad ; $param14 = $idimgtierra ;
    $param15 = $textambiente ; $param16 = $fuerza ;
    $param17 = $resistencia ; $param18 = $artista ;
    $param19 = $numcoleccion ; $param20 = $colorbase ;
    
    $sentencia -> execute();
    if($sentencia->affected_rows > 0){
        echo "<div class=notaimportante> <p> Nueva carta creada </p> <div>";
    }
    else{
        echo "<div class=notaimportante> <p> No se pudo crear nueva carta, intentelo de nuevo </p> <div>";
    }
    $sentencia -> close();

}

$db->close();