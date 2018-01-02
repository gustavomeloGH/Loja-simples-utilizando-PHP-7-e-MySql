<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/cabecalho.php"); ?>
    
    <h1>Contate-me:</h1>
    <form action="../controllers/envia-contato.php" method="post">

        <br/><br/>
        <table class="table">
            <tr>
                <td><label for="nome">Nome</label></td>
                <td><input type="text" name="nome" class="form-control"/></td>
            </tr>
            <tr>
                <td><label for="email">E-mail</label></td>
                <td><input type="email" name="email" class="form-control"/></td>
            </tr>
            <tr>
                <td><label for="mensagem">Mensagem</label></td>
                <td><textarea name="mensagem" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit" class="btn btn-default">Enviar</button></td>
            </tr>
        </table>
    </form>


<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/rodape.php");?>
