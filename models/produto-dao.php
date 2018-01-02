<?php 

    class ProdutoDAO {
        
        private $database;
    
        public function __construct(Database $database) {
            $this->database = $database;
        }

        public function inserirProduto(Produto $produto) {
            
            $nome = $produto->getNome();
            $preco = $produto->getPreco();
            $descricao = $produto->getDescricao();
            $categoria_id = $produto->getCategoria();
            $usado = $produto->getUsado();
            $conexao = $this->database->getConexao();
            $query = "insert into produtos (nome, preco, descricao, categoria_id, usado) 
                        values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";

                        echo ($query);
            return mysqli_query($conexao, $query);
        }

        public function atualizarProduto(Produto $produto) {

            $nome = $produto->getNome();
            $preco = $produto->getPreco();
            $descricao = $produto->getDescricao();
            $categoria_id = $produto->getCategoria();
            $usado = $produto->getUsado();
            $id = $produto->getId();

            $conexao = $this->database->getConexao();
            $query = "update produtos set nome = '{$nome}', preco = {$preco}, 
                        descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado}
                        where id = '{$id}'";
                        
            return mysqli_query($conexao, $query);
        }

        public function listarProdutos() {

            $conexao = $this->database->getConexao();
            $query = "select p.*, c.nome as categoria_nome from 
                        produtos as p join categorias as c on c.id = p.categoria_id";

            $resultado = mysqli_query($conexao, $query);
            $produtos = array();
            while( $object = mysqli_fetch_object($resultado) ) {
                array_push($produtos, $this->gerarProdutos($object));
            }
            return $produtos;
        }

        private function gerarProdutos($object) {
            
            $id = $object->id;
            $nome = $object->nome;
            $preco = $object->preco;
            $descricao = $object->descricao;
            $categoria_id = $object->categoria_nome;
            $usado = $object->usado;

            $produto = new Produto($nome, $preco, $descricao, $categoria_id, $usado);
            $produto->setId($id);

            return $produto;
        }

        public function removerProduto($id) {
            $conexao = $this->database->getConexao();
            $query = "delete from produtos where id = {$id}";
            return mysqli_query($conexao, $query);
        }

        public function buscarProduto($id) {
            $conexao = $this->database->getConexao();
            $query = "select * from produtos where id = {$id}";
            $resultado = mysqli_query($conexao, $query);
            $object = mysqli_fetch_object($resultado);
            $produto = $this->gerarProdutos($object);
            return $produto;
        }

    }