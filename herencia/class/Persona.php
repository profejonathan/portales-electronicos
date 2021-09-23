<?php
    class Persona {
        // Atributos
        public $dni;
        public $nombre;
        public $apellido;
        public $email;
        private $password;
        public $celular;

        // metodos
        public function login(){
            echo 'Login';
        }

        public function logout(){
            echo 'logout';
        }
    }

?>