<?php
        setlocale(LC_TIME, "es_ES.UTF-8");
        var_dump($_POST);

        $nombre = $_POST["name"];
        $apellidos = $_POST["surname"];
        
        echo "<h1>Nombre: $nombre</h1>";
        echo "<h1>Apellido: $apellidos</h1>";
        
        echo "<lo>";
        if(!empty($_POST["php"])){
            echo "<li>Domina: PHP</li>";
        }
        if(!empty($_POST["js"])){
            echo "<li>Domina: Javascript</li>";
        }
        if(!empty($_POST["java"])){
            echo "<li>Domina: Java</li>";
        }
        echo "</lo>";

        $fecha = $_POST["fecha"];
        
        $fechaFormateada = date("l-F-Y", strtotime($fecha));
        echo strftime($fechaFormateada);
    ?>º