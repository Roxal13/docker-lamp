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
        $num = $_GET["num"];
        
        if($num>0 && $num<11){
            for($i = 1; $i <= 10; $i++){
                echo $num * $i;
                if($i < 10){
                    echo " - ";
                }
            }
        }
    ?>
</body>
</html>