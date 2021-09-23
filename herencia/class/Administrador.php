<?php

    class Administrador extends Persona{
        public $credencial;

        // metodos
        public function creaUsuario(){
            echo 'Creando usuario';
        }

        public function eliminarUsuario(){
            echo 'Eliminando usuario';
        }

        // Sobre escribo el metodo de la clase Padre
        public function login(){
            echo("Este es un login con más seguridad");
        }
    }
?>