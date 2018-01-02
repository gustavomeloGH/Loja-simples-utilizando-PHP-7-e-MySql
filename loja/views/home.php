<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/cabecalho.php");
      require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/controllers/session/usuario-session.php");

    ?>

    <div>
        <h2>Bem vindo</h2>
        <h3>Login</h3> <br/><br/>
    </div>


    <?php if(usuarioEstaLogado()) {?>
        <p class="text-success">
            <?=$_SESSION["info"]?><a href="../controllers/usuario/logout.php"> Deslogar</a>
        </p>
    <?php } else { ?>
        <form action="../controllers/usuario/login.php" method="POST">
            <table class="table">
                <tr>
                    <td><label for="email">E-mail</label></td>
                    <td>
                        <input class="form-control" type="email" name="email" />
                    </td>
                </tr>
                <tr>
                    <td><label for="senha">Senha</label></td>
                    <td>
                        <input class="form-control" type="password" name="senha" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary">Login</button>
                    </td>
                </tr>
            </table>
        </form>
    <?php }?>

<?php require_once ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/rodape.php");?>