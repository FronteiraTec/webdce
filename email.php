<?php

date_default_timezone_set("America/Sao_Paulo");
require_once('src/PHPMailer.php');
require_once("src/SMTP.php");
require_once("src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;







if ((isset($_POST["email"]) && !empty(trim($_POST["email"]))) && (isset($_POST["mensagem"]) && !empty(trim($_POST["mensagem"])))) {

    $nome = !empty($_POST['nome']) ? $_POST['nome'] : "Nao informado";
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];



    $mail = new PHPMailer();
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->CharSet = "utf-8"; // set charset to utf8
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted

    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->Port = 587; // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isHTML(true); // Set email format to HTML

    $mail->Username = 'autentificacaositedce@gmail.com'; // SMTP username
    $mail->Password = '12345ABCd'; // SMTP password

    $mail->setFrom('fabricioz.1.2@hotmail.com', 'Fabricio'); //Your application NAME and EMAIL
    $mail->Subject = "Email do site DCE"; //Message subject
    $mail->MsgHTML('HTML code'); // Message body
    $mail->Body = "Nome: {$nome} <br>
                Email: {$email} <br>
                Mensagem:{$mensagem}<br>";

    $mail->addAddress('autentificacaositedce@gmail.com', 'Teste php'); // Target email


    if ($mail->send()) {
        echo "email enviado";
    } else {
        echo "email nao enviado";
    }
} else {
    echo "Complete as informações necessarias";
}