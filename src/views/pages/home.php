<?= $render("header"); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="" src="<?=$base; ?>/media/cover.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption text-center">
                    <h1>Manutenção de computadores</h1>
                    <p>Serviços de manutenção em desktops e notebooks</p>
                    
                </div>
            </div>
        </div>

        
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

</div>

<div class="row h2">
    navegue por estilo
</div>

<div class="row">
    <div class="col-sm-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-sport.jpg" width="170" height="170"/>
        <h2>esportiva</h2>
    </div>
    <div class="col-sm-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-daily.jpg" width="170" height="170"/>
        <h2>dia a dia</h2>
    </div>
    <div class="col-sm-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-social.jpg" width="170" height="170"/>
        <h2>social</h2>
    </div>
    <div class="col-sm-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-classy.jpg" width="170" height="170"/>
        <h2>estilosa</h2>
    </div>
</div>

<?= $render("footer"); ?>