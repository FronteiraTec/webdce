<?php require_once("includes/header.php");?>

<!-- Carousel -->
<div class="container">
    <div id="mainSlider" class="carousel slider" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
            <li data-target="#mainSlider" data-slide-to="1"></li>
            <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/exemplo_noticia1.jpg" class="d-block  w-75 carousel-img">
            </div>
            <div class="carousel-item">
                <img src="imagens/exemplo_noticia2.jpg" class="d-block w-75 carousel-img">
            </div>
            <div class="carousel-item">
                <img src="imagens/exemplo_noticia4.jpg" class="d-block w-75 carousel-img">
            </div>
        </div>
        <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev" onclick="$('#mainSlider').carousel('prev')">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next" onclick="$('#mainSlider').carousel('next')">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Últimas Noticias -->
<div class="container noticias">
    <h1 class="title"><a href="noticias.php">Últimas Notícias</a></h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4 col-md-12 img-noticia">
                        <img class="card-img-top" src="imagens/exemplo_noticia1.jpg" alt="Imagem capa da noticia">
                    </div>
                    <div class="col-8 col-md-12 info-noticia">
                        <h5 class="card-title card-noticia-title">
                            <a href="#" class="card-title card-noticia-title" data-toggle="tooltip" title="Titulo da Noticia aqui">Titulo da Noticia aqui</a>
                        </h5>
                        <p class="card-text">Autor da noticia aqui</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4 col-md-12 img-noticia">
                        <img class="card-img-top " src="imagens/exemplo_noticia1.jpg" alt="Imagem capa da noticia">
                    </div>
                    <div class="col-8 col-md-12 info-noticia">
                        <h5 class="card-title card-noticia-title">
                            <a href="#" class="card-title card-noticia-title" data-toggle="tooltip" title="Noticia com um titulo grande para testar o alinhamento">Noticia com um titulo grande para testar o alinhamento</a>
                        </h5>

                        <p class="card-text">Autor da noticia aqui</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="row">
                    <div class="col-4 col-md-12 img-noticia">
                        <img class="card-img-top" src="imagens/exemplo_noticia1.jpg" alt="Imagem capa da noticia">
                    </div>
                    <div class="col-8 col-md-12 info-noticia">
                        <h5 class="card-title card-noticia-title">
                            <a href="#" class="card-title card-noticia-title" data-toggle="tooltip" title="Titulo da Noticia aqui">Titulo da Noticia aqui</a>
                        </h5>
                        <p class="card-text">Autor da noticia aqui</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="ver-mais"><a href="noticias.php">Ver mais notícias</a></p>
</div>

<!-- Grupos de Estudo -->
<div class="container">
    <h1 class="title"><a href="grupos.php">Grupos de Estudo</a></h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-grupos">
                    <h3 class="card-title estudo-title">Ciência da Computação - Visão Computacional</h3>
                    <p class="card-text"><strong>Descrição:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus orci id augue aliquam dignissim in nec justo. Pellentesque luctus eu velit nec ullamcorper. In ultricies augue sed dictum vehicula. Duis vehicula nulla sit amet tortor lobortis dignissim.</p>
                    <p class="card-text"><strong>Contato:</strong> fulano.de.tal@gmail.com</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-grupos">
                    <h3 class="card-title estudo-title">Ciência da Computação - Visão Computacional</h3>
                    <p class="card-text"><strong>Descrição:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p class="card-text"><strong>Contato:</strong> fulano.de.tal@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <p class="ver-mais"><a href="grupos.php">Ver mais grupos</a></p>

</div>


<?php require_once("includes/footer.php")?>