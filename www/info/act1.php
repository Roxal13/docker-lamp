<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <h1>Ejemplo 2</h1>
    <?php
        $start = "Hola";
        $end = "adiós";
        $heredoc = $start.' podemos emplear la sintaxis "heredocs" para añadir '."'comilla simple' y ".'"comilla doble" en una cadena, '.$end;
        echo $heredoc;
    ?>
</body>
</html>