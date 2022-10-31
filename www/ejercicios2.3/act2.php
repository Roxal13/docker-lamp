<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="act2_provincia.php" method="post">
        <?php
            include "datos.php";
            foreach($provincias as $a => $valor){
                echo "<input type='radio' name='provincia' value='$valor'>$valor<br>";
            }
        ?>
        <input type="submit">
    </form>
</body>
</html>