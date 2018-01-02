<?php 

      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/mensagem-session.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/produto/produto-controller.php");

      $produtoController = new ProdutoController();
      $resultado = $produtoController->inserirProduto();
      $resultado[0] ? setaMensagem("success", "Adicionado com sucesso!") : setaMensagem("danger", "Produto não foi adicionado <br>" . $resultado[1]);
      header("Location: ../../views/produto-formulario.php");
      die();
