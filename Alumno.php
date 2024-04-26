<?php
require_once("./Persona.php");
/*========================
HERENCIA
========================*/
// aqui estamos heredando los atributos y los metodos de la clase Persona
class Alumno extends Persona{

    public string $clase = "Alumno";

    // metodo para saber si el alumno es graduado o no
    public function saberSiEsgraduado(){
        
        if ($this->edad >= 17) {
            $texto = $this->nombre." ya deberia haberse graduado del colegio.";
        } else {
            $texto = $this->nombre." aun está estudiando.";
        }

        return $texto;
    }

}