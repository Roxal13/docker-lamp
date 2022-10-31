<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
</head>
<body>
    <h1>Ejemplo 1</h1>
    <?php
        $nombre = 'Álvaro';
        echo "<p>Hola <strong> $nombre </strong></p>";

        $a = "hola";
        $hola = "mundo";
        $adios = "marte";

        echo "<br>";
        echo $a;
        echo "<br>";
        echo $$a;
        echo "<br>";
        $a = "adios";
        echo $$a;
        echo "<br><br>";

        $marte = "funciona"; 
        echo $$$a;
        echo "<br>";
        echo 'una y "otra" vez';
        echo "<br>";
        echo "una y 'otra' vez";
        echo "<br><br>";

        echo "Hola " . $nombre . ", bienvenido de vuelta.";
    phpinfo();
    ?>
</body>
</html>