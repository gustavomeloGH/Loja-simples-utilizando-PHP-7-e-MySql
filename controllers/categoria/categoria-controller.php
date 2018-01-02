<?php
    
    require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/models/categoria-dao.php");
    require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/config/database.php");

    
    class CategoriaController {

        private $database;
        private $categoriaDao;
        
        public function __construct() {
            $this->database = new Database();
            $this->categoriaDao = new categoriaDao($this->database);
        }


        public function listarCategorias() {
            return $this->categoriaDao->listarCategorias();
        }

    }