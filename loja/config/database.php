<?php

    class Database {
        private $host;
        private $username;
        private $password;
        private $database;
        private $conexao;

        public function __construct() {
            $this->host = "localhost";
            $this->username = "root";
            $this->password = "";
            $this->database = "loja";
            $this->conexao = $this->conectar();
        }

        public function getConexao() {
            return $this->conexao;
        }

        private function conectar() {
            return mysqli_connect(
                $this->host, 
                $this->username, 
                $this->password, 
                $this->database
            );
        }
    }



    