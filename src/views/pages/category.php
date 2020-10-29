<?= $render('simple-header', ['css' => 'styleCategory', 'title' => 'CATEGORIAS']); ?>
    
    <div class="row category">
        <a href="<?=$base;?>/search?q=daily"><img src="<?=$base;?>/assets/images/calendar.png" /><div>DIA A DIA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href="<?=$base;?>/search?q=sport"><img src="<?=$base;?>/assets/images/sport.png" /><div>ESPORTIVA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href="<?=$base;?>/search?q=classy"><img src="<?=$base;?>/assets/images/classy.png" /><div>ESTILOSA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href="<?=$base;?>/search?q=social"><img src="<?=$base;?>/assets/images/toast.png" /><div>SOCIAL</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>

<?= $render('footer'); ?>