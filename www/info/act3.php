<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <h1>Ejemplo</h1>
    
    <?php

    echo secuencia(2);

    function secuencia($start, $end = 10){
        for($i = $start; $i<$end; $i++){
            if ($i%2!=0) {
                echo "$i ";
            }
        }
    }
        
    ?>
</body>
</html>