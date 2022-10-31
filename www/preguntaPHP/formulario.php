<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formPost.php" method="post">
        <?php
            include "almacenPregunta.php";
            echo "<ul>";
            $numPreguntas = rand(1, 5);
            $keys = [];
            $preguntas = [];
            $i = 0;
            while($i < $numPreguntas){
                $currentKey = rand(0, 4);
                if(array_search($currentKey, $keys) == false){
                    array_push($keys, $currentKey);
                    $preguntas[$enunciados[$currentKey]] = $respuestas[$currentKey];
                    $i++;
                }
            }
            $contador = 0;
            foreach($preguntas as $a => $res){
                echo "$a<ol>";
                shuffle($res);
                echo "<input type='hidden' name='enunciado$contador' value='$a'>";
                for($i = 0; $i < count($preguntas[$a]); $i++){
                    echo "<li><input type='radio' name='respuesta$contador' value='$res[$i]'>$res[$i]</li>";
                }
                    echo "</ol>";
                    $contador++;
            }
            echo "</ul>";
        ?>
        <input type="submit">
    </form>
</body>
</html>