<?php 

require_once "../controllers/objetos.php";
require_once "../controllers/funtions.php";
require_once "../views/header.php";
        //Recoger valores
        $poblacion = $_POST['poblacion'];
        $porcpoli = $_POST['policias'];
        $porctende = $_POST['tenderos'];
        $porcconce = $_POST['concejales'];
        //transformarlos
        $poblacion = intval($poblacion);
        $porcpoli = intval($porcpoli);
        $porctende = intval($porctende);
        $porcconce = intval($porcconce);
        // operarlos
        /*
        $total = $porcpoli + $porctende + $porcconce;
        if($total>100){
                ?>
                <script>
                        window.location.replace("http://localhost/poblacion/");
                        alert("Error en la página, el porcentaje <?=$total?> excede el 100%");
                </script>
                
                
                
                
                <?php
                
                 
        }*/
        $numpolicias = npolicias($poblacion,$porcpoli);
        $numtenderos = ntenderos($poblacion,$porctende);
        $numconcejales = nconcejales($poblacion,$porcconce );
        $numciudadanos = nciudadanos($numpolicias,$numconcejales,$numtenderos,$poblacion);
        
        echo "
                <div class='row' id='centro'>
                        <div class='col-3'><h2>Policias: $numpolicias</h2></div>
                        <div class='col-3'><h2>Ciudadanos: $numciudadanos</h2></div>
                        <div class='col-3'><h2>Tenderos: $numtenderos</h2></div>
                        <div class='col-3'><h2>Concejales: $numconcejales</h2></div>
                <div>
                
        ";
        echo "<h1>Número de ciudadanos: $poblacion</h1>";
        echo "<hr>";
        echo "<h2>Ciudadanos</h2>";
        echo "<div class='gente'>";
        
        if($numciudadanos==0){echo "<h2>No hay ciudadanos</h2>";}
        for($i=1;$i<=$numciudadanos;$i++){
                $ciudadano="";
                $ciudadano= $ciudadano."".$i;
                $ciudadano= new ciudadanos();
                $ciudadano->nombre=darnombre();
                echo $ciudadano->mostrarinfociudadanos($ciudadano,rand(1,8));
        };
        echo "</div>";
        echo "<hr>";
        echo "<h2>Concejal</h2>";
        echo "<div class='gente'>";
        
        if($numconcejales==0){echo "<h2>No hay concejales</h2>";}
        for($i=1;$i<=$numconcejales;$i++){
                $concejal="";
                $concejal= $concejal."".$i;
                $concejal= new concejal();
                $concejal->nombre= darnombre();
                echo $concejal->mostrarinfoconcejal($concejal,rand(1,8));
        };
        echo "</div>";
        echo "<hr>";
        echo "<h2>Tenderos</h2>";
        echo "<div class='gente'>";
        
        if($numtenderos==0){echo "<h2>No hay tenderos</h2>";}
        for($i=1;$i<=$numtenderos;$i++){
                $tendero="";
                $tendero= $tendero."".$i;
                $tendero= new tendero();
                $tendero->nombre=darnombre();
                echo $tendero->mostrarinfotendero($tendero,rand(1,8));
        };
        echo "</div>";
        echo "<hr>";
        echo "<h2>Policías</h2>";
        echo "<div class='gente'>";
        
        if($numpolicias==0){echo "<h2>No hay policías</h2>";}
        for($i=1;$i<=$numpolicias;$i++){
                $policia="";
                $policia= $policia."".$i;
                $policia= new policia();
                $policia->nombre=darnombre();
                echo $policia->mostrarinfopolicia($policia,rand(1,8));
        };
        echo "</div>";

        echo"</div>";
require_once "../views/footer.php";
?>

