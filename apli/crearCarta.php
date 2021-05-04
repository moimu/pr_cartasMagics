<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Creacción cartas magic </title>
    <link rel="stylesheet" type="text/css" href="./css/styles2.css">
</head>
<body>

<header class="indexheader"> 
    <section class="logoymenu">
        <header >
            <img src="./img/fondos/shiny.png" class="imglogo">
            <h1> Galeria de magics </h1>
        </header>
        <main>
            <nav class="menu">
                <ol>
                    <li><a href="index.php"> Galeria </a></li>
                    <li><a href="crearCarta.php"> Crear carta </a></li>
                </ol>
            </nav>
        </main>
    </section>
</header>

<main class="maincrearcarta">
    <form class="formcrearcarta" name="crear-carta" method="POST" enctype="multipart/formdata" action="insertarCarta.php">
            <fieldset> 
                <legend>Nueva carta</legend>
                <div><label> Nombre: <input type="text" name="nombre" maxlength="100"required><label></div>
            </fieldset>
            <fieldset> 
                <legend>Fondo</legend> 
                <div>
                    <label> Sin fondo <input type="radio" name="idfondo" value="1" required><label>
                    <label> azul <input type="radio" name="idfondo" value="3" required><label>
                    <label> rojo <input type="radio" name="idfondo" value="6" required><label>
                </div> 
                <div>
                    <label> negro <input type="radio" name="idfondo" value="5" required><label> 
                    <label> blanco <input type="radio" name="idfondo" value="4" required><label>
                    <label> verde <input type="radio" name="idfondo" value="7" required><label>
                </div> 
            </fieldset>
            <fieldset>
                <legend>Color base</legend>
                <div>
                    <label> azul claro <input type="radio" name="colorbase" value="#d5dfe9"><label>
                    <label> blanco claro <input type="radio" name="colorbase" value="#f3f1e6"><label>
                    <label> rojo claro <input type="radio" name="colorbase" value="#f4e1d2"><label>
                    <label> verde claro <input type="radio" name="colorbase" value="#d6e7d4"><label>
                    <label> negro claro <input type="radio" name="colorbase" value="#eae7e0"><label>
                </div> 
            </fieldset>
            <fieldset>
                <legend>Shiny</legend>
                <div>
                    <label> No <input type="radio" name="idshiny" value="1" required><label>
                    <label> Si <input type="radio" name="idshiny" value="2" required><label>
                </div> 
            </fieldset>
            <fieldset>
                <legend>Manas</legend>
                <p>Mana 1</p>
                    <div>
                    <label>Sin mana<input type="radio" name="idmana1" value="1" required><label>
                    <label>azul<input type="radio" name="idmana1" value="12" required><label>
                    <label>rojo<input type="radio" name="idmana1" value="15" required><label>
                    <label>verde<input type="radio" name="idmana1" value="16" required><label>
                    <label>negro<input type="radio" name="idmana1" value="14" required><label>
                    <label>blanco<input type="radio" name="idmana1" value="13" required><label>
                    </div> 
                    <br>
                    <div><label>Cantidad:<input type="number" name="cantmana1" min="0" max="5" placeholder="0" required><label></div>
                <p>Mana 2</p>
                    <div>
                    <label>Sin mana<input type="radio" name="idmana2" value="1" required><label>
                    <label>azul<input type="radio" name="idmana2" value="12" required><label>
                    <label>rojo<input type="radio" name="idmana2" value="15" required><label>
                    <label>verde<input type="radio" name="idmana2" value="16" required><label>
                    <label>negro<input type="radio" name="idmana2" value="14" required><label>
                    <label>blanco<input type="radio" name="idmana2" value="13" required><label>
                    </div> 
                    <br>
                    <div><label>Cantidad:<input type="number" name="cantmana2" min="0" max="5" placeholder="0" required><label></div>
                <p>Mana incoloro</p>  
                    <div><label> Cantidad Incoloro: <input type="number" name="idmanaincoloro" min="0" max="10" placeholder="0" required><label></div>  
            </fieldset>
            <fieldset>
                <legend>Imagen</legend> 
                <div><label><input type="file" name="img" ><label></div>
            </fieldset>
            <fieldset>
                <legend>Tipo y especialidad</legend> 
                <div>
                    <label>Sin tipo<input type="radio" name="idtipo"  value="1"><label>
                    <label>Criatura<input type="radio" name="idtipo"  value="2"><label>
                    <label>Artefacto<input type="radio" name="idtipo"  value="3"><label>
                    <label>Tierra<input type="radio" name="idtipo"  value="9"><label>
                </div>
                <div>
                    <label>Criatura artefacto<input type="radio" name="idtipo" value="4"><label>
                    <label>Criatura legendaria<input type="radio" name="idtipo" value="5"><label>
                </div>
                    <label>Instantáneo<input type="radio" name="idtipo" value="6"><label>
                    <label>Encantamiento<input type="radio" name="idtipo" value="7"><label>
                    <label>Conjuro<input type="radio" name="idtipo" value="8"><label>
                </div>
                <br><br>
                <div><label> Tipo especifico: <input type="text" maxlength="50" name="tipoespecifico" placeholder="Especialidad de su tipo"><label></div>
            </fieldset>
            <fieldset>
            <legend>Tierra</legend>
                <div>
                    <label>Sin imagen<input type="radio" name="idimgtierra" value="1" required><label>
                    <label>llanura<input type="radio" name="idimgtierra" value="2" required><label>
                    <label>pantano<input type="radio" name="idimgtierra" value="3" required><label>
                    <label>montaña<input type="radio" name="idimgtierra" value="4" required><label>
                    <label>bosque<input type="radio" name="idimgtierra" value="5" required><label>
                    <label>isla<input type="radio" name="idimgtierra" value="6" required><label>
                </div>
                <div>
                    <label>llanura nevada<input type="radio" name="idimgtierra" value="7" required><label>
                    <label>pantano nevado<input type="radio" name="idimgtierra" value="8" required><label>
                    <label>montaña nevada<input type="radio" name="idimgtierra" value="9" required><label>
                    <label>bosque nevado<input type="radio" name="idimgtierra" value="10" required><label>
                    <label>isla nevada<input type="radio" name="idimgtierra" value="11" required><label>
                </div>
            </fieldset>
            <fieldset>
                <legend> Expansiones </legend> 
                <div>
                    <label> Sin expansión <input type="radio" name="idexpansion" value="1"><label>
                    <label>Conflux negro<input type="radio" name="idexpansion" value="2"><label>
                    <label>Conflux dorado<input type="radio" name="idexpansion" value="3"><label>
                    <label>Conflux gris<input type="radio" name="idexpansion" value="4"><label>
                    <label>Conflux rojo<input type="radio" name="idexpansion" value="5"><label>
                </div>
            </fieldset>
            <fieldset class="descripcionesform">
                <legend> Habilidades y Ambientación </legend> 
                <div><label> Descripción de habilidades: <input type="text" name="habilidad" maxlength="400" size="400" height="150"><label></div>
                <div><label> Texto Ambientación <input type="text" name="textambiente" maxlength="400" size="400"><label></div>
            </fieldset>
            <fieldset>
                <legend> fuerza y resistencia </legend> 
                <div>
                    <label> fuerza <input type="number" name="fuerza" min="0" max="20" placeholder="0" required><label>
                    <label> resistencia <input type="number" name="resistencia" min="0" max="20" placeholder="0" required><label>
                </div>
            </fieldset>
            <fieldset>
                <legend> Artista y colección </legend> 
                <div>
                    <label> Nombre artista <input type="text" name="artista"  maxlength="50" required><label>
                    <label> Nº colección <input type="number" name="numcoleccion" min="1" max="500" placeholder="1" required><label>
                </div>
            </fieldset>
            <div class="button"><button type="submit"> Crear carta </button></div>
    </form>
</main>

</body>
</html>