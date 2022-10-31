
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <style>
        table, td, th{
            margin: 5px;
            border-collapse: collapse;
            border: 3px solid;
            padding: 5px;
        }
        thead{
            background:lightgreen;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <td>Key</td>
                <td>Value</td>
            </tr>
        </thead>

    <?php
        foreach($_SERVER as $key => $valor){
            echo "<tr>";
            echo "<td>". $key . "</td>";
            echo "<td>". $valor . "</td>";
            echo "</tr>";
        }
    ?>
    
</table>
    

</body>
</html>