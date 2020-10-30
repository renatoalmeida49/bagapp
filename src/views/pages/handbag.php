<?= $render('simple-header', ['css' => 'product', 'title' => 'DETALHES DO PRODUTO']); ?>

<div class="row row-product">
Classificação: <?=$handbag->rate; ?>
</div>

<div class="row row-product">
    <img src="<?=$base;?>/media/<?=$handbag->photo;?>" />
</div>

<div class="row row-product">
    <?= $handbag->name; ?>
</div>

<div class="row row-product">
    <?= $handbag->price; ?>
</div>

<div class="row row-product">
    <a href="#"><button class="btn btn-danger">Adicionar a sacola</button></a>

    <a href="#"><button class="btn btn-danger">Comprar</button></a>
</div>


<?= $render('footer'); ?>