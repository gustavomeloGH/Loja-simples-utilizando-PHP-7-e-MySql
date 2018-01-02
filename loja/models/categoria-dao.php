<?php 


    class CategoriaDAO {

        private $database;
        
        public function __construct(Database $database) {
            $this->database = $database;
        }

        function listarCategorias() {
            $categorias = array();
            
            $query = "select * from categorias";
            $conexao = $this->database->getConexao();
            $resultado = mysqli_query($conexao, $query);
    
            while( $categoria = mysqli_fetch_assoc($resultado) ) {
                array_push($categorias, $categoria);
            }
            return $categorias;
        }
 }

    