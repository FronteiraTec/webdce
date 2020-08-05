<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = 'fabricioz.1.2@hotmail.com';
    $subject = "Site dce";
    $body = "Nome: " . $nome . "\r\n" .
        "Email: " . $email . "\r\n" .
        "Mensagem: " . $mensagem;


    $header = "From: fabricioz.1.2@hotmail.com " . "\r\n" .
        "Reply-To:" . $email . "\r\n" .
        "X=Mailer:PHP/" . phpversion();
    //o email inserido tem que pertencer ao dominio no qual o script ta rodando, https://www.youtube.com/watch?v=Af0X_pEt7AY 10:00  

    if (mail($to, $subject, $body, $header)) {
        echo ("Email enviado com sucesso!");
    } else {
        echo ("O email nao pode ser enviado");
    }
}