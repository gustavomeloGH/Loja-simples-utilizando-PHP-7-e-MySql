<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/universal/PHPMailer/src/Exception.php");
    require ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/universal/PHPMailer/src/PHPMailer.php");
    require ($_SERVER["DOCUMENT_ROOT"] . "/loja/views/universal/PHPMailer/src/SMTP.php");


    session_start();

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mail = new PHPMailer(true);     
    try {

        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true; 
        $mail->Username = 'seuemail@gmail.com';   //coloque seu email aqui...
        $mail->Password = 'seusenha'; //coloque sua senha aqui...
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;      
    
        $mail -> setFrom("seuemail@gmail.com", "Gustavo Melo");
        $mail -> addAddress("seuemail@gmail.com");
        $mail -> Subject = "Email de contato do site PHP - Loja";
        $mail -> msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
        $mail -> AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";
    
        $mail-> send();
         $_SESSION["success"] = "Mensagem enviada com sucesso";
         header("Location: ../views/contato.php");
            
    } catch (Exception $e) {
        $_SESSION["danger"] = "Erro ao enviar mensagem, contate o adminstrador.";
        header("Location: ../views/contato.php");
    }
    die();
    