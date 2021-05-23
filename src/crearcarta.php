<?php
include('clases/Utiles.php');
$util = new Utiles('Colección cartas magic','css/styles1.css','body',
'indexheader','logoymenu','menu','indexfooter','index.php','crearcarta.php');
$util->html_ini();
$util->html_head();
$util->html_body_ini();
$util->html_header();
?>

<main class="maincrearcarta">
    <form class="formcrearcarta" name="crear-carta" method="post" enctype="multipart/form-data" action="insertarcarta.php">
            <p class="notrequired nota"> Los campos no requeridos son color azul </p>
            
            <fieldset> 
                <legend>Nueva carta</legend>
                <div><label> Nombre: <input type="text" name="nombre" maxlength="100"required><label></div>
            </fieldset>
            <fieldset class="typeradio"> 
                <legend>Fondo</legend> 
                
                <div><label> Sin fondo <input type="radio" name="idfondo" value="1" required><label></div>
                <div> <label> azul <input type="radio" name="idfondo" value="3" required><label></div>
                <div><label> rojo <input type="radio" name="idfondo" value="6" required><label></div>
                <div><label> negro <input type="radio" name="idfondo" value="5" required><label> </div>
                <div><label> blanco <input type="radio" name="idfondo" value="4" required><label></div>
                <div> <label> verde <input type="radio" name="idfondo" value="7" required><label></div>
                
            </fieldset>
            <fieldset class="typeradio">
                <legend>Color base</legend>
                
                <div><label> azul claro <input type="radio" name="colorbase" value="#d5dfe9" required><label></div> 
                <div><label> blanco claro <input type="radio" name="colorbase" value="#f3f1e6" required><label></div> 
                <div> <label> rojo claro <input type="radio" name="colorbase" value="#f4e1d2" required><label></div> 
                <div> <label> verde claro <input type="radio" name="colorbase" value="#d6e7d4" required><label></div> 
                <div> <label> negro claro <input type="radio" name="colorbase" value="#eae7e0" required><label></div> 
                
            </fieldset>
            <fieldset class="typeradio">
                <legend>Shiny</legend>
                
                <div><label> No <input type="radio" name="idshiny" value="1" required><label></div> 
                <div> <label> Si <input type="radio" name="idshiny" value="2" required><label></div> 
                
            </fieldset>
            <fieldset class="typeradio">
                <legend>Mana 1</legend>
                   
                <div><label>Sin mana<input type="radio" name="idmana1" value="1" required><label></div> 
                <div><label>azul<input type="radio" name="idmana1" value="12" required><label></div> 
                <div><label>rojo<input type="radio" name="idmana1" value="15" required><label></div> 
                <div><label>verde<input type="radio" name="idmana1" value="16" required><label></div> 
                <div><label>negro<input type="radio" name="idmana1" value="14" required><label></div> 
                <div><label>blanco<input type="radio" name="idmana1" value="13" required><label></div> 
                <div><label>Cantidad:<input type="number" name="cantmana1" min="0" max="5"  required><label></div>
            </fieldset>   
            <fieldset class="typeradio">
                <legend>Mana 2</legend>
                
                <div><label>Sin mana<input type="radio" name="idmana2" value="1" required><label></div> 
                <div><label>azul<input type="radio" name="idmana2" value="12" required><label></div> 
                <div><label>rojo<input type="radio" name="idmana2" value="15" required><label></div> 
                <div><label>verde<input type="radio" name="idmana2" value="16" required><label></div> 
                <div><label>negro<input type="radio" name="idmana2" value="14" required><label></div> 
                <div><label>blanco<input type="radio" name="idmana2" value="13" required><label></div> 
                <div><label>Cantidad:<input type="number" name="cantmana2" min="0" max="5" required><label></div>
            </fieldset>
            <fieldset>    
                <p>Mana incoloro</p>  
                <div><label> Cantidad: <input type="number" name="idmanaincoloro" min="0" max="10" required><label></div>  
            </fieldset>
            <fieldset>
                <legend>Imagen</legend> 
                <div><label><input class="inputimg" type="file" name="imagen" required><label></div>
            </fieldset>
            <fieldset class="typeradio">
                <legend>Tipo y especialidad</legend> 
                
                <div><label>Sin tipo<input type="radio" name="idtipo"  value="1" required><label></div>
                <div><label>Criatura<input type="radio" name="idtipo"  value="2" required><label></div>
                <div><label>Artefacto<input type="radio" name="idtipo"  value="3" required><label></div>
                <div><label>Tierra<input type="radio" name="idtipo"  value="9" required><label></div>
                <div><label>Criatura artefacto<input type="radio" name="idtipo" value="4" required><label></div>
                <div><label>Criatura legendaria<input type="radio" name="idtipo" value="5" required><label></div>
                <div><label>Instantáneo<input type="radio" name="idtipo" value="6" required><label></div>
                <div><label>Encantamiento<input type="radio" name="idtipo" value="7" required><label></div>
                <div><label>Conjuro<input type="radio" name="idtipo" value="8" required><label></div>
                
                <br>
                <div><label class="notrequired"> Tipo especifico: <input type="text" maxlength="50" name="tipoespecifico" placeholder="Especialidad de su tipo"><label></div>
            </fieldset>
            <fieldset class="typeradio">
            <legend>Tierra</legend>
                
                <div><label>Sin imagen<input type="radio" name="idimgtierra" value="1" required><label></div>
                <div><label>llanura<input type="radio" name="idimgtierra" value="2" required><label></div>
                <div><label>pantano<input type="radio" name="idimgtierra" value="3" required><label></div>
                <div><label>montaña<input type="radio" name="idimgtierra" value="4" required><label></div>
                <div><label>bosque<input type="radio" name="idimgtierra" value="5" required><label></div>
                <div><label>isla<input type="radio" name="idimgtierra" value="6" required><label></div>
                <div><label>llanura nevada<input type="radio" name="idimgtierra" value="7" required><label></div>
                <div><label>pantano nevado<input type="radio" name="idimgtierra" value="8" required><label></div>
                <div><label>montaña nevada<input type="radio" name="idimgtierra" value="9" required><label></div>
                <div><label>bosque nevado<input type="radio" name="idimgtierra" value="10" required><label></div>
                <div><label>isla nevada<input type="radio" name="idimgtierra" value="11" required><label></div>
                
            </fieldset>
            <fieldset class="typeradio">
                <legend> Expansiones </legend> 
                <div>
                    <label> Sin expansión <input type="radio" name="idexpansion" value="1" required><label>
                    <label>Conflux negro<input type="radio" name="idexpansion" value="2" required><label>
                    <label>Conflux dorado<input type="radio" name="idexpansion" value="3" required><label>
                    <label>Conflux gris<input type="radio" name="idexpansion" value="4" required><label>
                    <label>Conflux rojo<input type="radio" name="idexpansion" value="5" required><label>

                    <label>Ravnica negro<input type="radio" name="idexpansion" value="6" required><label>
                    <label>Ravnica dorado<input type="radio" name="idexpansion" value="7" required><label>
                    <label>Ravnica gris<input type="radio" name="idexpansion" value="8" required><label>
                </div>
            </fieldset>
            <fieldset class="descripcionesform notrequired" >
                <legend> Habilidades y Ambientación </legend> 
                <div><label> Descripción de habilidades: <input type="text" name="habilidad" maxlength="400" size="400" height="150"><label></div>
                <div><label> Texto Ambientación <input type="text" name="textambiente" maxlength="400" size="400"><label></div>
            </fieldset>
            <fieldset class="notrequired">
                <legend> fuerza y resistencia </legend> 
                <div>
                    <label> fuerza <input type="number" name="fuerza" min="0" max="20"  required><label>
                    <label> resistencia <input type="number" name="resistencia" min="0" max="20"  required><label>
                </div>
            </fieldset>
            <fieldset>
                <legend> Artista y colección </legend> 
                <div><label> Nombre artista <input type="text" name="artista"  maxlength="50" required><label></div>
                <br/>
                <div><label> Nº colección <input type="number" name="numcoleccion" min="1" max="500" required><label></div>
            </fieldset>
            <fieldset>
                <legend> Cantidad de cartas a crear</legend> 
                <div>
                    <label> Cantidad <input type="number" name="cantidad" min="1" max="500" required><label>
                </div>
            </fieldset>
            <div ><button class="buttonform" type="submit"> Crear carta </button></div>
    </form>
</main>

<?php
$util->html_body_fin();
$util->html_fin();