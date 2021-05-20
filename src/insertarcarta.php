<?php
$nombre = $_POST["nombre"];
$idfondo = intval($_POST["idfondo"]);
$idshiny = intval($_POST["idshiny"]);
$idmana1 = intval($_POST["idmana1"]);
$cantmana1 = intval($_POST["cantmana1"]);
$idmana2 = intval($_POST["idmana2"]);
$cantmana2 = intval($_POST["cantmana2"]);
$idmanaincoloro = intval($_POST["idmanaincoloro"] +1);
// nombre de la imagen
$nombreimg = $_FILES["imagen"]["name"];
// fichero imagen 
$archivo = $_FILES["imagen"]["tmp_name"];
$idtipo = intval($_POST["idtipo"]);     
$tipoespecifico = $_POST["tipoespecifico"];
$idexpansion = intval($_POST["idexpansion"]);
$habilidad = $_POST["habilidad"];
$idimgtierra = intval($_POST["idimgtierra"]);
$textambiente = $_POST["textambiente"];
$fuerza = intval($_POST["fuerza"]);
$resistencia = intval($_POST["resistencia"]);
$artista = $_POST["artista"];
$numcoleccion = intval($_POST["numcoleccion"]);
$colorbase = $_POST["colorbase"];
$cantidad = $_POST["cantidad"];
// ruta destino server xampp 
$destino = $_SERVER['DOCUMENT_ROOT']."\codigodaw\pr102\src\img\dibujo\\".$nombreimg; 
// ruta destino en base de datos
$img = "img/dibujo/".$nombreimg;
// mover fichero imagen a ruta en servidor
move_uploaded_file($archivo, $destino);

include('conexionbd.php');

if(isset($_POST['nombre'])){

    $sentencia = $db->prepare("
        INSERT INTO `cartas`
        (`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
        `cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
        `idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
        `resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)  
    "); 
    $sentencia ->bind_param('siiiiiiisisisisiisisi', $param1, $param2,
    $param3, $param4, $param5,$param6, $param7, $param8,
    $param9, $param10, $param11, $param12, $param13,
    $param14, $param15, $param16, $param17, $param18,
    $param19, $param20, $param21
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
    $param21 = $cantidad;
    
    
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