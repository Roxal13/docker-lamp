<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio3.php" method="post" enctype="multipart/form-data">
        <h1>Usuario</h1>
        <label for="name">Nombre:</label>
        <input id="name" type="text" name="name">
        <br>
        <label for="edad">Edad:</label>
        <input id="edad" type="date" name="edad">
        <br>
        <label for="name">Foto:</label>
        <input id="name" type="file" name="file">
        <br>
        <input value="crear" type="submit">
    </form>
    <?php
        if(isset($_POST["name"]) || isset($_POST["edad"]) || isset($_POST["file"])){
            $comprobacion = [];
            if($_POST["name"] != ""){
                echo "<p>nombre: " . $_POST["name"] . "</p>";
            }else{
                $comprobacion[0] = FALSE;
            }
            
            $today = time();
            $fechaForm = strtotime($_POST["edad"]);
            $diff = (((($today - $fechaForm) / 24)/ 60) /60);


            if(round($diff) > 1 && isset($_POST["edad"])){
                $añoForm = new DateTime($_POST["edad"]);
                $añoToday = new DateTime();
                $annos = $añoToday->diff($añoForm);
                echo "<p>edad: " . $annos->y . "</p>";

            }else{
                echo "<p>Inserte una fecha válida</p>";
            }
            $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                if($ext == "png" || $ext == "jpeg" || $ext == "gif"){
                    if(move_uploaded_file($_FILES["file"]["tmp_name"],"profiles/" . $_POST["name"].".$ext")){
                    }else{
                        echo "No se ha enviado correctamente";
                    }
                }else{
                    echo "Está enviando un archivo de formato '$ext'. Debe enviar JPEG, GIF o PNG";
                }
                echo "<p><img src='profiles/" . $_POST["name"] . "." .  $ext . "'></p>";
            }
        }
    ?>
</body>
</html>