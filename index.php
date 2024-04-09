<?php
// trayeno el archivo Persona.php y Alumno.php
require_once("./Persona.php");
require_once("./Alumno.php");


// creando una instancia de la clase
$carlos = new Persona("Carlos", 56);
// cambiando el orden de los parametros
$juan = new Persona(edad:20 , nombre:"Juan");

// accediendo a los atributos y metodos
echo $carlos->saludar();
echo "<br>";
echo $juan->saludar();

echo "<br>";
// accediendo a la clase Alumno
$maria = new Alumno("Maria", 17);
echo $maria->saberSiEsgraduado();