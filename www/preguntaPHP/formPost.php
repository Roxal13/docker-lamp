<?php
    include "almacenPregunta.php";
    $i = 0;
    $contador = 0;
    while($i >= 0){
        if(array_key_exists("enunciado$i", $_POST) == false || array_key_exists("enunciado$i", $_POST) == false){
            $i = -1;
        }else{
            $posEnun = array_search($_POST["enunciado$i"], $enunciados);
            $posResp = array_search($_POST["respuesta$i"], $respuestas[$posEnun]);
            if($posResp == 0){
                echo "La pregunta " . $_POST["enunciado$i"];
                echo "<br>La respuesta a la " . $i+1 . " es verdadera. <br><br>";
                $contador += $puntuacion[$posEnun];
            }else{
                echo "La pregunta" . $_POST["enunciado$i"];
                echo "<br>La respuesta a la " . $i+1 . " es falsa. <br><br>";
            }
            $i++;
        }
    }
    echo "<br> La puntuación total es: $contador"; 

    

    
    
?>