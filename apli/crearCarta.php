<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creacción cartas magic </title>
</head>
<body>

<form method="POST" enctype="application/x-www-form-urlencoded" action="crearCarta.php">
    <fieldset>
        <legend>Nueva carta</legend>
            <div><label> Nombre: <input type="text" name="nombre" required><label></div>
        <fieldset> 
        <legend>Fondo</legend> 
            <div>
                <label> azul <input type="radio" name="idfondo" value="" required><label>
                <label> rojo <input type="radio" name="idfondo" value="" required><label>
                <label> verde <input type="radio" name="idfondo" value="" required><label>
            </div> 
            <div>
                <label> negro <input type="radio" name="idfondo" value="" required><label> 
                <label> blanco <input type="radio" name="idfondo" value="" required><label>
            </div> 
        </fieldset>
        <fieldset>
            <legend>Shiny</legend>
            <div><label> Si <input type="radio" name="shiny" value="si" required><label></div> 
            <div><label> No <input type="radio" name="shiny" value="no" required><label></div> 
        </fieldset>
        <fieldset>
            <legend>Mana</legend>
                <div><label> azul <input type="radio" name="idmana1" value=""><label></div> 
                <div><label> rojo <input type="radio" name="idmana1" value=""><label></div> 
                <div><label> verde <input type="radio" name="idmana1" value=""><label></div> 
                <div><label> negro <input type="radio" name="idmana1" value=""><label></div> 
                <div><label> blanco <input type="radio" name="idmana1" value=""><label></div> 

                <div><label> Cantidad: <input type="number" name="cantmana1"><label></div>
            <legend>Mana</legend>
                <div><label> azul <input type="radio" name="idmana2" value=""><label></div> 
                <div><label> rojo <input type="radio" name="idmana2" value=""><label></div> 
                <div><label> verde <input type="radio" name="idmana2" value=""><label></div> 
                <div><label> negro <input type="radio" name="idmana2" value=""><label></div> 
                <div><label> blanco <input type="radio" name="idmana2" value=""><label></div> 

                <div><label> Cantidad: <input type="number" name="cantmana2"><label></div>
            <legend>Mana incoloro</legend>  
                <div><label> Cantidad: <input type="number" name="idmanaincoloro"><label></div>  
        </fieldset>
        <fieldset>
            <div><label> IMAGEN: <input type="text" name="alias" required><label></div>
        </fieldset>
        <fieldset>
            <legend>Tipo y especialidad</legend> 
            <div><label> Criatura: <input type="radio" name="idtipo" ><label></div>
            <div><label> Artefacto: <input type="radio" name="idtipo" ><label></div>
            <div><label> Criatura artefacto: <input type="radio" name="idtipo" ><label></div>
            <div><label> Criatura legendaria: <input type="radio" name="idtipo" ><label></div>
            <div><label> Instantáneo: <input type="radio" name="idtipo" ><label></div>
            <div><label> Encantamiento: <input type="radio" name="idtipo" ><label></div>
            <div><label> Conjuro: <input type="radio" name="idtipo" ><label></div>
            <div><label> Tierra: <input type="radio" name="idtipo" ><label></div>

            <div><label> Tipo especifico: <input type="text" name="tipoespecifico" placeholder=""><label></div>
        </fieldset>
        <fieldset>
            <div><label> tierra roja <input type="radio" name="idimgtierra" required><label></div>
            <div><label> tierra verde <input type="radio" name="idimgtierra" required><label></div>
            <div><label> tierra negra <input type="radio" name="idimgtierra" required><label></div>
            <div><label> tierra azul <input type="radio" name="idimgtierra" required><label></div>
            <div><label> tierra blanca <input type="radio" name="idimgtierra" required><label></div>
        </fieldset>
        <fieldset>
            <legend> Expansión </legend> 
            <div><label> Conflux: <input type="radio" name="idexpansion" value=""><label></div>
            <div><label> ... <input type="radio" name="idexpansion" value=""><label></div>
            <div><label> ... <input type="radio" name="idexpansion" value=""><label></div>
            <div><label> ... <input type="radio" name="idexpansion" value=""><label></div>
        </fieldset>
        <fieldset>
            <legend> Habilidades y Ambientación </legend> 
            <div><label> Descripción de habilidades: <input type="text" name="habilidad"><label></div>
            <div><label> Texto Ambientación <input type="radio" name="textambiente" ><label></div>
        </fieldset>
        <fieldset>
            <legend> fuerza y resistencia </legend> 
            <div><label> fuerza <input type="number" name="fuerza" ><label></div>
            <div><label> resistencia <input type="number" name="resistencia" ><label></div>
        </fieldset>
        <fieldset>

        </fieldset>

       
    </fieldset>

</form>



</body>
</html>

<?php