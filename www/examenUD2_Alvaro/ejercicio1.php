<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        
        <?php
            include "data_provincias.php";
            include "data_municipios.php";
            
            if(isset($_POST["MUNICIPIOS"])){
                echo "<h1>PUEBLOS DE ESPAÑA</h1>";
                echo "<h3>El municipio " . $MUNICIPIOS[$_POST["PROVINCIAS"]][$_POST["MUNICIPIOS"]] . 
                " con código " . $_POST["MUNICIPIOS"] . " pertenece a " . $PROVINCIAS[$_POST["PROVINCIAS"]] ."</h3>";

            }else if(isset($_POST["PROVINCIAS"])){
                echo "<h1>PUEBLOS DE ESPAÑA</h1>";
                echo "<h2>Provincia de: " . $PROVINCIAS[$_POST["PROVINCIAS"]] . "</h2>";
                echo "<label for='municipio'>Municipios: </label>";
                echo "<input type='hidden' name='PROVINCIAS' value=" . $_POST["PROVINCIAS"] . ">";
                echo "<select id='municipio' name='MUNICIPIOS'>";
                echo "<option disabled selected>Elige un municipio</option>";
                $munSelect = $MUNICIPIOS[$_POST["PROVINCIAS"]];
                foreach($munSelect as $a => $valor){
                    echo "<option value='$a' >$valor</option>";
                }
            }else{
        ?> 
            <h1>PUEBLOS DE ESPAÑA</h1>
            <label for="provincia">Provincias: </label>
            <select id="provincia" name='PROVINCIAS'>
                <option disabled selected>Elige una provincia</option>
            <?php 
                foreach($PROVINCIAS as $a => $valor){
                    echo "<option value='$a'>$valor</option>";
                }
            ?>
            </select>
        <?php
            }
        ?>  
            <input type="submit">
        
    </form>
</body>
</html>