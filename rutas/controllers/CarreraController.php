<?php
    require_once 'models/CarreraModel.php';
    class CarreraController {
        private $carreraModel;  

        public function __construct() {
            echo(" Me instanciaron");
            $this->carreraModel = new CarreraModel();

        }

        public function index() {
            //echo(" Estoy en el index de CarreraController");
            require_once ('views/carreraView.html');
        }

        public function listar() {
            echo(" Estoy en el listar de CarreraController");
            $datos = $this->carreraModel->listar();
            print_r($datos);

        }
    }
?>