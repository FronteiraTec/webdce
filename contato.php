<?php require_once("includes/header.php"); ?>


<section class="content">
    <div class="contato">
        <h1>Fale Conosco</h1>
        <h6>Seu email não será publicado/divulgado. </h6>
        <form class="form" method="POST" action="./email.php">
            <input class="field" name="nome" placeholder="Nome">
            <input class="field" name="email" placeholder="E-mail">
            <textarea class="field" name="mensagem" placeholder="Digite sua mensagem aqui" maxlength="200"></textarea>
            <input class="botaoenviar" type="submit" value="Enviar">
        </form>
    </div>
</section>


<div class="localizacao">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113646.78846818066!2d-52.732016350498185!3d-27.11025028476605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fb4b2bbbd96a4b%3A0x5871f4d6809cb67e!2sUniversidade%20Federal%20da%20Fronteira%20Sul%2C%20Campus%20Chapec%C3%B3!5e0!3m2!1spt-BR!2sbr!4v1597082565539!5m2!1spt-BR!2sbr"
        width="600" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
</div>



<?php require_once("includes/footer.php"); ?>