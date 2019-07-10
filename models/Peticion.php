<?php
namespace models;

require_once('Conexion.php');
class Peticion{

    // PROPIEDADES

    private $conexion;


    // CONSTRUCTOR

//     public function __construct($servidor, $usuario, $password, $basededatos){


// $this->conexion = new \mysqli($servidor, $usuario, $password, $basededatos);

//     }

    // METODOS

    public function Peticion($inputEspecialidad) {


        $persona = [

            ['frontend' => 'toni'],
            ['frontend' => 'jorge'],
            ['frontend' => 'jose'],
            ['frontend' => 'jaume'],
            ['frontend' => 'lolo']
        ];

        foreach($persona AS $valor) {

    
        if ($inputEspecialidad == $valor[['frontend']]) {

echo $valor[rand(0,4)];
            
        }

    }

}




}

?>