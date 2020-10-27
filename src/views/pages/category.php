<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleCategory.css" />
        <title>HandbagApp</title>
    </head>

    <body class="text-center">

    <header class="fixed-top">
        <div class="row">
            <div class="col-auto">
                <strong>CATEGORIAS</strong>
            </div>
        </div>
    </header>
    
    <div class="row category">
        <a href=""><img src="<?=$base;?>/assets/images/calendar.png" /><div>DIA A DIA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href=""><img src="<?=$base;?>/assets/images/sport.png" /><div>ESPORTIVA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href=""><img src="<?=$base;?>/assets/images/classy.png" /><div>ESTILOSA</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>
    <div class="row category">
        <a href=""><img src="<?=$base;?>/assets/images/toast.png" /><div>SOCIAL</div><img src="<?=$base;?>/assets/images/arrow.png" /></a>
    </div>

    <?= $render('footer'); ?>