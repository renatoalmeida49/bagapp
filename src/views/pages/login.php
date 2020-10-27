<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" type="image/png" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=$base;?>/assets/css/styleLogin.css" />
        <title>BagApp</title>
    </head>

    <body class="text-center">

    <header class="fixed-top">
        <div class="row">
            <div class="col-auto">
                <strong>ENTRE OU CADASTRE-SE</strong>
            </div>
        </div>
    </header>

    <form class="form-singin" method="POST" action="<?=$base;?>/login">
        <img src="<?=$base;?>/assets/images/user-profile.png" class="mb-4"/>
        <?php if(!empty($flash)): ?>
            <div class="flash"><?php echo $flash; ?></div>
        <?php endif; ?>
        <label for="email" class="sr-only">E-mail</label>
        <input autofocus required id="email" class="form-control" type="email" name="email" placeholder="informe seu e-mail" />
        <label for="password" class="sr-only">Senha</label>
        <input required id="password" class="form-control" type="password" size="32" name="password" placeholder="informe sua senha" />

        <button class="btn btn-block btn mb-3 btn-danger" type="submit">Acessar</button>
        
        <div class="h4">Ainda não tem cadastro?</div>

        <a href="#modalCadastro" class="btn-lg btn-DANGER" data-toggle="modal" data-target="#modalCadastro">CRIAR AGORA</a>
    </form>

    <div id="modalCadastro" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form method="POST" action="<?=$base;?>/login/singUp">
                    <div class="modal-header">
                        <h2>Cadastro</h2>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>

                    <div class="modal-body">
                        <label for="nameSingUp">Nome:</label>
                        <input class="form-control" required id="nameSingUp" type="text" name="nameSingUp"/>

                        <label for="loginSingUp">E-mail:</label>
                        <input class="form-control" required id="emailSingUp" type="text" name="emailSingUp"/>

                        <label for="passwordSingUp">Senha:</label>
                        <input class="form-control" required id="passwordSingUp" type="password" size="32" name="passwordSingUp"/>

                        <label for="repeatPassword">Repita senha:</label>
                        <input class="form-control" required id="repeatPassword" type="password" size="32" name="repeatPassword"/>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger form-control" type="submit">Cadastrar</button>
                        <button class="btn btn-sucess" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $render('footer'); ?>