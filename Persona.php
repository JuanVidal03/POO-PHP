<?php

// inicializando la clase
class Persona {

    // se le da un valor por defecto
    public string $nombre;
    public int $edad;

    // constructor
    public function __construct(string $nombre, int $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // metodo de saludar
    public function saludar():string{
        return "Hola, soy ".$this->nombre;
    }

    // metodo para saber la edad
    public function saberEdad():string{
        return $this->nombre.", tiene: ".$this->edad;
    }

}


// creando una instancia de la clase
$carlos = new Persona("Carlos" , 56);
// accediendo a los atributos y metodos
echo $carlos->saludar();