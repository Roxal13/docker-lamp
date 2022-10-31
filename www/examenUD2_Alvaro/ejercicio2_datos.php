<?php
    $usuarios = [["Pepe", "Manolo", "Sara"], ["1234", "abcd", "hola"], ["blocked", "normal", "admin"]];
    
    function crearUser($user, $password, $estructuraDato){
        $usuarios[0][] = $user;
        $usuarios[1][] = $password;
        if(include "$estructuraDato" == TRUE){
            
        }
    }
?>