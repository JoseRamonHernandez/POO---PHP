<?php

    class Usuario{
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $pais;

        public function __construct($nombre, $apellido, $fechaNacimiento, $pais){
                $this -> nombre = $nombre;
                $this -> apellido = $apellido;
                $this -> fechaNacimiento = $fechaNacimiento;
                $this -> pais = $pais;
        }

        public function getNombre(){
            return $this -> nombre;
        }

        public function setPais($pais){
            $this -> pais = $pais;
            return $this;
        }

        public function __toString(){
            return $this -> nombre . " " . $this -> apellido . 
            " (" . $this -> fechaNacimiento . ", " . $this pais . ")";
        }

        //CRUD
        
        public function guardarUsuario(){

        }

        public function obtenerUsuario(){
            
        }

        public function actualizarUsuario(){
            
        }

        public function eliminarUsuario(){
            
        }
    
    }


?>