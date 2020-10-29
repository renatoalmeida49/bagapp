

<?php foreach($carouselItens as $item): ?>
            <?= $render('carousel-item', ['item' => $item]); ?>
        <?php endforeach; ?>







<div class="carousel-item">
    <img class="" src="<?php echo BASE_URL; ?>assets/images/newRede2.jpg" alt="Second slide">
    <div class="container">
        <div class="carousel-caption text-center">
            <h1>Serviços de rede</h1>
            <p>Serviços de configuração de roteadores, repetidores, passagem e crimpagem de cabos</p>
        </div>
    </div>
</div>