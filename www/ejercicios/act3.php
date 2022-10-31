<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "frutas.php";
        
        sort($frutas);
        echo "<ol>";
        foreach ($frutas as $key => $value){
            echo "<li>".$value."</li>";
        }
        echo "</ol>";

        echo "<ol>";
        foreach ($frutas as $key => $value){
            if(strlen($value)>5){
                echo "<li><strong>".$value."</strong></li>";
            }else{
                echo "<li>".$value."</li>";
            }
        }
        echo "</ol>";

        echo "<ol>";
        foreach ($frutas as $key => $value){
            echo "<li><a href='$value.html'>$value</a></li>";
        }
        echo "</ol>";

    ?>
</body>
</html>