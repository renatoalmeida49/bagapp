<?= $render("header"); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="" src="<?=$base; ?>/media/cover.jpg" alt="First slide">
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
    <div class="col-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-sport.jpg" width="75" height="75"/>
        <h5>esportiva</h5>
    </div>
    <div class="col-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-daily.jpg" width="75" height="75"/>
        <h5>dia a dia</h5>
    </div>
    <div class="col-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-social.jpg" width="75" height="75"/>
        <h5>social</h5>
    </div>
    <div class="col-3">
        <img class="rounded-circle" src="<?=$base; ?>/media/style-classy.jpg" width="75" height="75"/>
        <h5>estilosa</h5>
    </div>
</div>

<div class="row freight">
    <div class="col-2"><img src="<?=$base;?>/assets/images/delivery.png" /></div>
    <div class="col-8">o frete é por nossa conta</div>
    <div class="col-2"><img src="<?=$base;?>/assets/images/delivery.png" /></div>
</div>

<div class="row feed">
    <div class="col">
        <div class="item">
            <div class="head-item"><img src="<?=$base;?>/media/3c88936dea8e237a73d86dda87307792.jpg"></div>
            <div class="body-item">Bolsa amarela</div>
            <div class="footer-item">R$ 666,00</div>
        </div>

        <div class="item">
            <div class="head-item"><img src="<?=$base;?>/media/6ace6393b2454f0327f1ae0a620483cb.jpg"></div>
            <div class="body-item">Bolsa vermelha</div>
            <div class="footer-item">R$ 450,00</div>
        </div>

        <div class="item">
            <div class="head-item"><img src="<?=$base;?>/media/45cb8ce0cda2d6b89ff9a650ef749f71.jpg"></div>
            <div class="body-item">Bolsa azul</div>
            <div class="footer-item">R$ 56,00</div>
        </div>

        <div class="item">
            <div class="head-item"><img src="<?=$base;?>/media/46d9ca9236850d32eaeb71b8b77011b9.jpg"></div>
            <div class="body-item">Bolsa verde</div>
            <div class="footer-item">R$ 1,00</div>
        </div>
    </div>
</div>

<?= $render("footer"); ?>