<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/../paginas/config_email.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp_user'];
    $mail->Password = $config['smtp_pass'];
    $mail->SMTPSecure = $config['smtp_secure'] === 'tls'
        ? PHPMailer::ENCRYPTION_STARTTLS
        : PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $config['smtp_port'];
    $mail->CharSet = 'UTF-8';

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress('f_faustino@supremexpansion.com', 'SupremeXpansion');
    // $mail->addCC('info@supremexpansion.com', 'SupremeXpansion');
    echo "chegou aqui";

    $mail->isHTML(true);
    $mail->AltBody = "Nova mensagem de contacto.";

    $html = "
    <div style='font-family:Poppins, sans-serif; background:#111; padding:20px; border-radius:10px; color:#fff;'>
        <h2 style='color:#c40000;'>Novo contacto recebido</h2>
        <p><strong>Nome:</strong> Filipe Faustino</p>
        <p><strong>Email:</strong> filipefaustino2007@gmail.com</p>
        <p><strong>Telemóvel:</strong> +351 912 345 678</p>
        <p><strong>Motivo:</strong> Pedido de orçamento</p>
        <p><strong>Assunto:</strong> Website empresarial</p>
        <p><strong>Mensagem:</strong><br>Gostaria de receber um orçamento para um site institucional.</p>
        <br>
        <p style='font-size:13px; color:#999;'>Mensagem gerada automaticamente via formulário de contacto do site SupremeXpansion.</p>
    </div>";

    $mail->Subject = "Novo contacto via website SupremeXpansion";
    $mail->msgHTML($html);

    $mail->send();
    echo "Enviado com sucesso.";

} catch (Exception $e) {
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}
?>
