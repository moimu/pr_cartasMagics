<?php
include('cartas/Utiles.php');
$util = new Utiles('Colección cartas magic','css/styles1.css','body',
'indexheader','logoymenu','menu','indexfooter','index.php','crearcarta.php');
$util->html_ini();
$util->html_head();
$util->html_body_ini();
$util->html_header();
?>

<section class="seccionbotones">
    <nav>
        <button class="button" id="nomAsc"><p>Nombre</p><p> ASC</p></button>
        <button class="button" id="nomDesc"><p>Nombre</p><p> DESC</p></button>
        <button class="button" id="estAsc"> ASC</button>
        <button class="button" id="estDesc"> DESC</button>
        <button class="button" id="tipoAsc"><p>Tipo</p><p> ASC</p></button>
        <button class="button" id="tipoDesc"><p>Tipo</p><p> DESC</p></button>
    </nav>
</section>
<main class="indexmain">
    
    <?php
        
        include('cartas/objetoscartas.php');

        foreach($cartas as $clave=>$valor){
            $valor->thumbnail();     
            $valor->imprime(); 
        }
    
    ?>
    <script src="./js/script.js" language="javascript" type="text/javascript"></script>
</main>
  
<?php
$util->html_footer_index();
$util->html_body_fin();
$util->html_fin();