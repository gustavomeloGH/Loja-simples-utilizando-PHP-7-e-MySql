<html>
<?php  
    error_reporting(E_ALL ^ E_NOTICE);
    require_once("mostra-alerta.php"); 

    $produtoFormUrl = "/loja/views/produto-formulario.php";
    $produtoListUrl = "/loja/views/produto-lista.php";
    $contatoUrl = "/loja/views/contato.php";

?>

<head>

    <meta charset="UTF-8">
    <title>Minha loja</title>
    <link rel="stylesheet" href="universal/css/bootstrap.css">
    <link rel="stylesheet" href="universal/css/loja.css">

</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">Minha loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $produtoFormUrl ?>"> Adiciona Produto</a></li>
                    <li><a href="<?php echo $produtoListUrl ?>"> Produtos</a></li>
                    <li><a href="<?php echo $contatoUrl ?>"> Contato</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="principal">
        <?php mostraAlerta("success"); ?>
        <?php mostraAlerta("danger"); ?> 