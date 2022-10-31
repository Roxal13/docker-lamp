<?php
    $extension = $_FILES["fichero"]["name"];
    $extension = explode(".", $extension);
    $extension = $extension[count($extension)-1];
    
    if(is_uploaded_file($_FILES["fichero"]["tmp_name"])){
        if($extension == "txt" || $extension == "html"){
            if(move_uploaded_file($_FILES["fichero"]["tmp_name"],"text/" . $_FILES["fichero"]["name"])){
                echo "El archivo se envió correctamente a la carpeta Text/";
            }else{
                echo "El archivo no se pudo enviar";
            }
        }else{
            if(move_uploaded_file($_FILES["fichero"]["tmp_name"],"bin/" . $_FILES["fichero"]["name"])){
                echo "El archivo se envió correctamente a la carpeta Bin/";
                include $_FILES['fichero']['name'];
            }else{
                echo "El archivo no se pudo enviar";
            }
        }
    }
?>