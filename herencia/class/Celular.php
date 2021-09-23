<?php
    class Celular{
        // Atributos
        public $numero;
        public $modelo;
        public $marcar;
        public $contactos = array();
        private $digito;

        // metodos
        public function prender(){
            echo 'Encendido';
        }

        public function marcarNumero($numero){
            $this->digito = $numero;
        }

        public function llamar(){
            echo 'Llamando a ' . $this->digito;
        }

        public function setContacto($contacto){
            $this->contactos[] = $contacto;
        }
        // Retorna un contacto por posicion
        public function getContato($index){
            
        }

        public function getContatos(){
            $array = array();

            foreach ($this->contactos as $objeto) {
                $array[] = array(
                    'Nombre' => $objeto->getNombre(),
                    'Numero' => $objeto->getNumero()
                );
            }

            echo json_encode($array);

        }
    }

?>