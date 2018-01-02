<?php 

    class UsuarioDAO {

        private $database;

        public function __construct(Database $database) {
            $this->database = $database;
        }

        public function buscarUsuario(Usuario $usuario) {
            
            $conexao = $this->database->getConexao();

            $email = $usuario->getEmail();
            $senha = $usuario->getSenha();

            $senhaMd5 = md5($senha);
            $email = mysqli_real_escape_string($conexao, $email);
            $query = "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'";
            
            $resultado = mysqli_query($conexao, $query);
            $object = mysqli_fetch_object($resultado);
            $usuarioEncontrado = $this->gerarUsuario($object);
            return $usuarioEncontrado;
        }

        private function gerarUsuario($object) {
            return ($object != null) ? new Usuario($object->email, $object->senha) : null;
        }
    }