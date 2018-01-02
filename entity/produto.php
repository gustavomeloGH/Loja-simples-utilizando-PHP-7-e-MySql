<?php 

    class Produto {
        
        private $id;
        private $preco;
        private $nome;
        private $descricao;
        private $categoria_id;
        private $usado;

        public function __construct($nome, $preco, $descricao, $categoria_id, $usado) {
            $this->id = null;
            $this->preco = $preco;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->categoria = $categoria_id;
            $this->usado = $usado;
        }


        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function getCategoria() {
            return $this->categoria;
        }

        public function setCategoria($categoria_id) {
            $this->categoria = $categoria_id;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getUsado() {
            return $this->usado;
        }

        public function setUsado($usado) {
            $this->usado = $usado;
        }

    }