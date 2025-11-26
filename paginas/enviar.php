<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// MOSTRAR ERROS PARA DEBUG
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "PHP ativo<br>";

// autoload do composer
require __DIR__ . '/../vendor/autoload.php';

// config do email (AJUSTADO)
$config = require __DIR__ . '/config_email.php';
echo "config OK<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "POST recebido<br>";

    $nome      = $_POST['nome'] ?? '';
    $email     = $_POST['email'] ?? '';
    $telemovel = $_POST['telemovel'] ?? '';
    $motivo    = $_POST['motivo'] ?? '';
    $assunto   = $_POST['assunto'] ?? '';
    $mensagem  = $_POST['mensagem'] ?? '';

    echo "vars OK<br>";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 3;
        $mail->Debugoutput = 'html';

        $mail->Host       = $config['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $config['smtp_user'];
        $mail->Password   = $config['smtp_pass'];
        $mail->SMTPSecure = $config['smtp_secure'] === 'tls'
            ? PHPMailer::ENCRYPTION_STARTTLS
            : PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $config['smtp_port'];
        $mail->CharSet    = 'UTF-8';

        echo "SMTP OK<br>";

        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress('f_faustino@supremexpansion.com', 'SupremeXpansion');

        $mail->isHTML(true);
        $mail->AltBody = "Nova mensagem de contacto.";

        $html = "
        <div style='font-family:Poppins, sans-serif; background:#111; padding:20px; border-radius:10px; color:#fff;'>
            <h2 style='color:#c40000;'>Novo contacto recebido</h2>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telemóvel:</strong> $telemovel</p>
            <p><strong>Motivo:</strong> $motivo</p>
            <p><strong>Assunto:</strong> $assunto</p>
            <p><strong>Mensagem:</strong><br>$mensagem</p>
        </div>";

        $mail->Subject = "Novo contacto via website SupremeXpansion";
        $mail->msgHTML($html);

        $mail->send();
        echo "Enviado com sucesso!";

    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
}
?>
