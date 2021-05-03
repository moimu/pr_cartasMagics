<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Galeria Magic </title>
    <link rel="icon" href="#">
    <link rel="stylesheet" type="text/css" href="./css/styles1.css">
</head>
<body class="body" >

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
    <section class="seccionbotones">
        <nav>
            <button class="button" id="nomAsc">Nombre ASC</button>
            <button class="button" id="nomDesc">Nombre DESC</button>
            <button class="button" id="estAsc">Establecido ASC</button>
            <button class="button" id="estDesc">Establecido DESC</button>
            <button class="button" id="tipoAsc">Tipo ASC</button>
            <button class="button" id="tipoDesc">Tipo DESC</button>
        </nav>
    </section>
    <main class="indexmain">
        
        <?php
            
            include('cartas.php');
    
            foreach($cartas as $clave=>$valor){
                $valor->thumbnail();     
                $valor->imprime(); 
            }
        
            // $ordennombre; 
            // $ordenidcarta;
            // $ordentipo;

            // var_dump($ordennombre);
            // var_dump($ordenidcarta);
            // var_dump($ordentipo);

           
        ?>
    <script src="./js/script.js" language="javascript" type="text/javascript"></script>
    </main>

    <footer class="indexfooter">

        <section>
            <header> <h1> Conteo de cartas </h1> </header>
            <p>Total de cartas:  <script> document.writeln(totalcartas); </script> </p>
            <p>Total de cartas diferentes: <script> document.writeln(totalcartasdif); </script> </p>
        </section>

    </footer>
    
</body>

</html>