<?php
    function buscarPalabras($texto, $palabras){
        $palabras = explode(" ", $palabras);
        foreach($palabras as $key => $value){
            $coincidencia = strpos($texto, $value);
            if($coincidencia == true){
                echo "<p>La palabra $value está</p>";
            }else{
                echo "<p>La palabra $value no está</p>";
            }
        }
    }

    buscarPalabras($_POST["texto"], $_POST["palabras"]);
?>