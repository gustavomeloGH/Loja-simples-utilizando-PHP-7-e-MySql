<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/cabecalho.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/produto/produto-controller.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/usuario-session.php");


      $produtoController = new ProdutoController();
      $produtos = $produtoController->listarProdutos();

      ?>

    <h1>Lista de Produtos:</h1>
    <br/><br/>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Usado</th>
                <?php
                    if(usuarioLogado()) { 
                ?>
                <th>Alterar</th>
                <th>Remover</th>
                <?php }?>
            </tr>
        </thead>
        <?php 
            foreach($produtos as $produto) :
        ?>
        
        <tbody>
            <tr>
                <td><?=$produto->getNome()?></td>
                <td><?=$produto->getPreco()?></td>
                <td><?=substr($produto->getDescricao(), 0, 40)?></td>
                <td><?=$produto->getCategoria()?></td>
                <?php 
                    $usado = $produto->getUsado() == 1 ? "Sim" :  "Não";
                ?>
                <td><?=$usado?></td>
                <?php
                    if(usuarioLogado()) { 
                ?>
                <td><a class="btn btn-primary" 
                    href="../views/produto-altera.php?id=<?=$produto->getId()?>">alterar</a>
                </td>
                <td>
                    <form action="../controllers/produto/remover-produto.php" method="post">
                        <input type="hidden" name="id" value=<?=$produto->getId()?>>
                        <button class="btn btn-danger">remover</button>
                    </form>
                </td>
                <?php }?>
            </tr>
        </tbody>
        <?php
            endforeach
        ?>
        <?php
            if(!usuarioLogado()) { 
        ?>
        <h5 class="alert-danger">Para alterar ou remover produto é necessário estar logado antes!</h5>
        <?php }?>
    </table>





<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/rodape.php"); ?>