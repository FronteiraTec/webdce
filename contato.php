<?php require_once("includes/header.php");?>


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


    

    
<?php require_once("includes/footer.php");?>