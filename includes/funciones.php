<?php

require 'app.php';

function incluirTemplate( string $nombre, bool $inicio = false, bool $textoIndex = false ) {
    include TEMPLATES_URL . "/${nombre}.php";
} 


function estaAutenticado(): bool{
    session_start();

    $auth = $_SESSION['login'];
    // echo $auth;
    if($auth){
        return true;
    }
    
    return false;
    

}