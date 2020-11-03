<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css" />
        <title>HandbagApp</title>
    </head>

    <body>

    <header class="fixed-top">
        <form method="GET" action="<?=$base;?>/search">
            <input type="search" placeholder="Pesquisar" name="q" />
        </form>
    
        <a href="#" class="cart">
            <img src="<?= $base; ?>/assets/images/cart.png" />
        </a>
    </header>