<?php
    class Persona {
        // Atributos
        private $dni;
        public $nombre;
        public $apellido;
        public $email;
        private $password;
        protected $celular;

        function __construct($nombre, $apellido) {
            $this->celular = new Celular();
            $this->nombre = $nombre;
        }
        // metodos
        public function setDni($dni){
            $this->dni = $dni;
        }

        public function getDni(){
            return $this->dni;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function login(){
            echo 'Login';
        }

        public function logout(){
            echo 'logout';
        }


    }

?>