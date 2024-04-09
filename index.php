<?php
// trayeno el archivo Persona.php
require_once("./Persona.php");


// creando una instancia de la clase
$carlos = new Persona("Carlos" , 56);
// accediendo a los atributos y metodos
echo $carlos->saludar();