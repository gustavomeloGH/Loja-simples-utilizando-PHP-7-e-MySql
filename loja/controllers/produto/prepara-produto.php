<?php 

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    if(array_key_exists('usado', $_POST)) {
        $usado = "true";
    } else {
        $usado = "false";
    }

    $produto = new Produto($nome, $preco, $descricao, $categoria_id, $usado);