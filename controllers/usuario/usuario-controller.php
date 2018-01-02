<?php

    require_once ("../../entity/usuario.php");
    require_once ("../../models/usuario-dao.php");
    require_once ("../../config/database.php");
    require_once ("../../controllers/session/usuario-session.php");
    require_once ("../../controllers/session/mensagem-session.php");

    class UsuarioController {

        private $database;
        private $usuarioDao;
        
        public function __construct() {

            $this->database = new Database();
            $this->usuarioDao = new UsuarioDAO($this->database);

        }

        public function fazerLogin() {
            $usuario = $this->buscarUsuario();
            verificarLogin($usuario);
            die();
        }

        public function fazerLogout() {
            logout();
            die();        
        }
        
        private function buscarUsuario() {

            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $usuario = new Usuario($email, $senha);

            return $this->usuarioDao->buscarUsuario($usuario);
        }
    }