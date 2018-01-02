<?php

    require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/entity/produto.php");
    require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/models/produto-dao.php");
    require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/config/database.php");

    class ProdutoController {

        private $database;
        private $produtoDao;
        
        public function __construct() {
            $this->database = new Database();
            $this->produtoDao = new ProdutoDAO($this->database);
        }

        public function inserirProduto() {
            include("prepara-produto.php");
            $resultado = $this->produtoDao->inserirProduto($produto);
            $msgConnection = mysqli_error($this->database->getConexao());
            $arrayReturn = array($resultado, $msgConnection);
            return $arrayReturn;
        }

        public function atualizarProduto() {
            include("prepara-produto.php");
            $id = $_POST['id'];
            $produto->setId($id);
            return $this->produtoDao->atualizarProduto($produto);
        }

        public function listarProdutos() {
            return $this->produtoDao->listarProdutos();
        }

        public function removerProduto() {
            $id = $_POST['id'];
            $this->produtoDao->removerProduto($id);
        }

        public function buscarProduto() {
            $id = $_GET['id'];
            return $this->produtoDao->buscarProduto($id);
        }

    }