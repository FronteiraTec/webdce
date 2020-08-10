<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DCE UFFS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> >

    <link href="css/style.css" rel="stylesheet">
    <link href="css/contato.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

        }

        .content {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }

        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .field {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #DDD;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
        }

        textarea {
            height: 150px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="index.html"><img src="imagens/dce_logo.png" width="120" alt="logo-dce"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="noticias.html">Noticias</a></li>
                        <li><a href="entidades.html">Entidades</a></li>
                        <li><a href="documentos.html">Documentos</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                        <li><a href="contato.html">Contato</a></li>
                    </ul>
                </div>
                <!-- /.Navbar-collapse -->
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="contato">
            <h3>Fale Conosco</h3>
            <form class="form" method="POST" action="./email.php">
                <input class="field" name="nome" placeholder="Nome">
                <input class="field" name="email" placeholder="E-mail">
                <textarea class="field" name="mensagem" placeholder="Digite sua mensagem aqui"
                    maxlength="200"></textarea>
                <input class="botaoenviar" type="submit" value="Enviar">
            </form>
        </div>
    </section>




</body>
</html>