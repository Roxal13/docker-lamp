
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <style>
        table, td, th{
            margin: 20px;
            border-collapse: collapse;
            border: 3px solid;
            border-color: green;
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        echo "<table>";
        echo "<tr>";
        include "data_table.php";

        for($i = 1; $i <= $rows; $i++){
            echo "<tr>";
            for($j = 1; $j <= $columns; $j++){
                $valor = $i*$j;
                echo "<td>". $valor . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>" ;
    ?>
    
    <?php

    
        
    ?>
</body>
</html>