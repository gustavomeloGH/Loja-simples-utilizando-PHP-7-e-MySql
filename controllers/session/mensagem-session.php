<?php 

    session_start();
    
    function setaMensagem($tipo, $msg) {
        $_SESSION[$tipo] = $msg;
    }