<?php

// inicializando la clase
class Persona {
    /*
        // se le da un valor por defecto
        public string $nombre;
        public int $edad;

        // constructor
        public function __construct(string $nombre, int $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
    */
    
    public string $clase = "Persona";

    //nueva manera de declarar el constructor desde PHP 8
    public function __construct(
        public string $nombre,
        public int $edad
    ){}

    // metodo de saludar
    public function saludar():string{
        return "Hola, soy ".$this->nombre." y pertenezco a la clase ".$this->clase;
    }

    // metodo para saber la edad
    public function saberEdad():string{
        return $this->nombre.", tiene: ".$this->edad;
    }

}

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

// creancion de instancias
$carlos = new Persona("Carlos", 56);
echo $carlos->saludar();

echo "<br>";

$juan = new Alumno("Juan Vidal", 17);
echo $juan->saberSiEsgraduado();