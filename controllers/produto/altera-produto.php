<?php 

      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/mensagem-session.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/produto/produto-controller.php");

      $produtoController = new ProdutoController();
      $resultado = $produtoController->atualizarProduto();
      setaMensagem("success", "Alterado com sucesso!");
      header("Location: ../../views/produto-lista.php");
      die();