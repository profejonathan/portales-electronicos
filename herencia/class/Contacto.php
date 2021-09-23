<?php
    class Contacto{
        // Atributos
        private $nombre;
        private $numero;

        // metodos
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getNumero(){
            return $this->numero;
        }

    }
?>