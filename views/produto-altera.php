<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/cabecalho.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/usuario-session.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/entity/produto.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/categoria/categoria-controller.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/produto/produto-controller.php");
      

      $categoriaController = new CategoriaController();
      $categorias = $categoriaController->listarCategorias();

      $produtoController = new ProdutoController();
      $produto = $produtoController->buscarProduto();

      if($produto->getUsado() == 0) {
        $usado = "";
      } else {
        $usado = "checked='checked'";
      }


      ?>

    <h1>Aterar Produtos:</h1>
    <form action="../controllers/produto/altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto->getId()?>">
            <?php include("produto-formulario-base.php"); ?>
                <tr>
                    <td><button class="btn btn-primary" type="submit" class="btn btn-default">Alterar</button></td>
                </tr>
                <br/>
            </table>
    </form>
    
    
<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/rodape.php");?>