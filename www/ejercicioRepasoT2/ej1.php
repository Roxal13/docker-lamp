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
        if(isset($_POST["resul"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if($num1 + $num2 == $_POST["resul"]){
                echo "<p>El resultado de $num1 + $num2 es: Correcto</p>";
            }else{
                echo "<p>Incorrecto</p> <p>El resultado de $num1 + $num2 es:" . $num1+$num2 . "</p>";
            }
        }
    ?>
    <form action="ej1.php" method="post">
        <?php
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        echo "<input type='text' readonly name='num1' value='$num1'>";
        echo "<input type='text' readonly name='num2' value='$num2'>";
        ?>
        <input type='num' placeholder="Solución" name="resul">
        <input type="submit">
    </form>
</body>
</html>