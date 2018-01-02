<?php require_once("mensagem-session.php");

    session_start();

    function verificarLogin($usuario) { 
        if(usuarioExiste($usuario)) {
            logarUsuario($usuario->getEmail());
        } else {
            setaMensagem("danger", "Login e/ou senha inválidos!");
        }
        header("Location: ../../index.php");
    }

    function verificaUsuario() {
        if(!usuarioEstaLogado() ) {
            setaMensagem("danger", "Para ter acesso a funcionalidade, é necessário realizar o login!");
            header("Location: ../index.php");
            die();
        }
    }

    function usuarioEstaLogado() {
        $estaLogado = isset($_SESSION["usuario_logado"]);
        if ($estaLogado) { 
            $usuarioLogado = usuarioLogado();
            setaMensagem("info", "Login realizado com suceso! <br/>Você está logado como {$usuarioLogado}"); 
        }
        return $estaLogado;
    }

    function usuarioLogado() {
        return $_SESSION["usuario_logado"];
    }

    function logarUsuario($email) {
        $_SESSION["usuario_logado"] = $email;
       /* setcookie("usuario_logado", $email, time() + 60);*/
    }

    function usuarioExiste($usuario) {
        return $usuario != null;
    }

    function logout() {
        /*unset($_SESSION["usuario_logado"]);*/
        session_destroy();
        session_start();
        setaMensagem("success", "Deslogado com sucesso");
        header("Location: ../../index.php");    
    }

