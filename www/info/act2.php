<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <h1>Ejemplo 3</h1>
    <ul>
        <li><?php echo $_SERVER["PHP_SELF"]; ?></li>
        <li><?php echo $_SERVER["SERVER_ADDR"]; ?></li>
        <li><?php echo $_SERVER["SERVER_NAME"]; ?></li>
        <li><?php echo $_SERVER["DOCUMENT_ROOT"]; ?></li>
        <li><?php echo $_SERVER["REMOTE_ADDR"]; ?></li>
        <li><?php echo $_SERVER["REQUEST_METHOD"]; ?></li>
    </ul>
    <h2>ENV</h2>
    <p><?php var_dump($_ENV); ?></p>
    <?php

        echo strftime("<br>%A");
        setlocale(LC_TIME, "es_ES.UTF-8");
        echo strftime(" en español es %A.");

        echo "<br>";
        echo "La fecha de hoy es: ".date("d-m-Y H:i:s");
        echo "<br><br>";
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                printf("%d ", $i . $j);
            }
        }
        echo "<br>El módulo $subject del ciclo $study";
        include "vars.php";
        echo "<br>El módulo $subject del ciclo $study";
        echo "<br>";
        phpinfo();
        
        
    ?>
</body>
</html>