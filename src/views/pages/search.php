<?= $render('header'); ?>

<div class="row feed search-feed">
    <div class="col">

        <?php if(empty($bags)): ?>
            <div class="h1">Desculpe. Não encontramos nenhuma bolsa.</div>
        <?php endif; ?>

        <?php foreach($bags as $bag): ?>

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

<?= $render('footer');?>