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