<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo(string $actual, string $proximo):bool {
    if($actual !== $proximo) {
        return true;
    }
    return false;
}

// Iniciar Sesión
function iniciarSesion() {
    if(!isset($_SESSION)){
        session_start();
    }  
}

// Función que revisa que el ususario esté autenticado
function isAuth():void {
    if(!isset($_SESSION["login"])) {
        header("Location: /");
    }
}

// Función que revisa que el ususario sea Administrador
function isAdmin():void {
    if(!isset($_SESSION["admin"])) {
        header("Location: /");
    }
}