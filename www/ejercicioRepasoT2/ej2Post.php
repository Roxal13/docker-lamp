<?php
    function diasEntreFechas($fecha1, $fecha2){
        $fecha1 = strtotime($fecha1);
        $fecha2 = strtotime($fecha2);
        $diff = (((($fecha1 - $fecha2) / 24)/ 60) /60);
        if($diff < 0){
            $diff = $diff * -1;
        }
        echo "<p>La diferencia entre " . date("d-m-Y", $fecha1) . " y " 
            . date("d-m-Y", $fecha2) . " es de: " . "$diff días</p>";
    }

    diasEntreFechas($_POST["fecha1"], $_POST["fecha2"]);
?>