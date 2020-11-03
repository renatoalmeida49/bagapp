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
        <a href="<?=$base;?>/search?q=sport">
            <img class="rounded-circle" src="<?=$base; ?>/media/style-sport.jpg" width="75" height="75"/>
            <h5>esportiva</h5>
        </a>
    </div>
    <div class="col-3">
        <a href="<?=$base;?>/search?q=daily">
            <img class="rounded-circle" src="<?=$base; ?>/media/style-daily.jpg" width="75" height="75"/>
            <h5>dia a dia</h5>
        </a>
    </div>
    <div class="col-3">
        <a href="<?=$base;?>/search?q=social">
            <img class="rounded-circle" src="<?=$base; ?>/media/style-social.jpg" width="75" height="75"/>
            <h5>social</h5>
        </a>
    </div>
    <div class="col-3">
        <a href="<?=$base;?>/search?q=classy">
            <img class="rounded-circle" src="<?=$base; ?>/media/style-classy.jpg" width="75" height="75"/>
            <h5>estilosa</h5>
        </a>
    </div>
</div>

<div class="row freight">
    <div class="col-2"><img src="<?=$base;?>/assets/images/delivery.png" /></div>
    <div class="col-8">o frete é por nossa conta</div>
    <div class="col-2"><img src="<?=$base;?>/assets/images/delivery.png" /></div>
</div>

<div class="row feed">
    <div class="col">

        <?php foreach($handbags as $bag): ?>

            <a href="<?=$base;?>/handbag/<?=$bag->id;?>">

            <div class="item">
                <div class="head-item"><img src="<?=$base;?>/media/<?=$bag->photo;?>"></div>
                <div class="body-item"><?=$bag->name;?></div>
                <div class="footer-item"><?=$bag->price;?></div>
            </div>

            </a>

        <?php endforeach; ?>
        
    </div>
</div>

<?= $render("footer"); ?>