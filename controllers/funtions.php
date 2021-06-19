<?php
    function npolicias($num,$porcentaje){
        $npolicias = $num*($porcentaje/100);
        return round($npolicias);
    }
    function nciudadanos($npolicias,$nconcejales,$ntenderos,$total){
        $nciudadanos = $total - ($ntenderos+$npolicias+$nconcejales);
        return round($nciudadanos);
    }
    function ntenderos($num,$porcentaje){
        $ntenderos = $num*($porcentaje/100);
        return round($ntenderos);
    }
    function nconcejales($num,$porcentaje){
        $nconcejales = $num*($porcentaje/100);
        return round($nconcejales);
    }
    function darnombre(){
        //Conexion a la bbdd
        $db = mysqli_connect('localhost', 'root', '', 'poblacion');
        $db->query("SET NAMES 'utf8'");
        $cont = "SELECT MAX(cod) FROM nombres";
        $result = mysqli_query($db,$cont);
        $fila = mysqli_fetch_assoc($result);
        $max= $fila["MAX(cod)"];
        //echo intval($fila)."<br>";
        $aleatorio = rand(1,$max);
        //leer
        $sql = "SELECT * FROM nombres where cod like $aleatorio";
        if ($elegido = mysqli_query($db,$sql)) {
            while ($nombre = mysqli_fetch_row($elegido)) {
                
                return $nombre[1];
            };
            
        }
        mysqli_close($db);
    }

?>