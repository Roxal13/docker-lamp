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
        $navidad = strtotime("2022-12-25");
        $today = time();
        
        $diff = (((($navidad - $today) / 24)/ 60) /60);

        echo "Quedan ".round($diff). " días hasta Navidad";
        
    ?>
</body>
</html>