<?= $render('simple-header', ['css' => 'insert', 'title' => 'ADICIONAR BOLSAS']); ?>

    <div class="h1">Adicionar bolsa</div>

    <form class="form" method="POST" enctype="multipart/form-data" action="<?=$base;?>/insert">

    <?php if(!empty($flash)): ?>
        <div><?=$flash;?>
    <?php endif; ?>

    <input type="name" class="form-control" required name="name" id="name" placeholder="Nome da bolsa" />
    <input type="number" class="form-control" required name="price" id="price" placeholder="Valor (R$)" />
    <input type="number" class="form-control" required name="rate" id="rate" placeholder="Classificação" />

    <select id="category" class="form-control" name="category" required>
        <option value="" disabled selected>Selecione uma categoria</option>
        <option value="daily">Dia a dia</option>
        <option value="sport">Esportiva</option>
        <option value="classy">Estilosa</option>
        <option value="social">Social</option>
    </select>

    <label class="file-upload">
        <input type="file" required name="photo" id="photo" />
    </label>

    <button type="submit" class="btn-lg btn-danger">Adicionar</button>

    </form>

<?= $render('footer'); ?>