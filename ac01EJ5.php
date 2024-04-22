<?php
$nombres = array("Juan", "Pedro", "María", "Raúl");
$apellidos = array("Pérez", "González", "Rodríguez", "López");

$nombres_apellidos = array();
foreach ($nombres as $i => $nombre) {
    $nombre_apellido = ucfirst(strtolower($nombre[0])) . strtolower(substr($nombre, 1)) . " " . strtolower($apellidos[$i]);
    $nombres_apellidos[] = $nombre_apellido;
}

print_r($nombres_apellidos);
?>