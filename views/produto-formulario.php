<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/cabecalho.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/usuario-session.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/entity/produto.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/categoria/categoria-controller.php");


    verificaUsuario();
    $categoriaController = new CategoriaController();
    $categorias = $categoriaController->listarCategorias();
    
    $produto = new Produto("", "", "", "1", "");

    
    ?>

    <h1>Formulário de Produtos:</h1>
    <form action="../controllers/produto/adiciona-produto.php" method="post">
        <div class="form-group">
            <?php include("produto-formulario-base.php"); ?>
                <tr>
                    <td><button class="btn btn-primary" type="submit" class="btn btn-default">Cadastrar</button></td>
                </tr>
                <br/>
            </table>
        </div>
    </form>
<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/rodape.php");?> 