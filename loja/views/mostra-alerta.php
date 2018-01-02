<?php 
session_start();
    function mostraAlerta($tipo) {
        if(isset($_SESSION[$tipo])) { ?>
            <p class="alert-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
        <?php limpaMensagem($tipo); }
    }

    function limpaMensagem($tipo) {
        unset($_SESSION[$tipo]);
    }