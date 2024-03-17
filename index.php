<?php $head = 'Index' ?>


<?php require_once __DIR__ . '/parts/header.php' ?>
<main>
    <?php require_once __DIR__ . '/data/db.php'; ?>

    <div class="d-none">
        <?php var_dump($dogsProducts) ?>
        <?php var_dump($catsProducts) ?>
    </div>

    <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
        <p><?= $dogsProducts[0]->name ?></p>
        <p><?= $dogsProducts[0]->price ?></p>
        <img src="<?= $dogsProducts[0]->path ?>" alt="<?= $dogsProducts[0]->name ?>">
        <div class="row">
            <?php foreach ($dogsProducts[0]->categories as $category) : ?>
                <p class="col-xxl-3 col-xl-3 col-md-4 col-sm-6"><?= $category ?></p>
            <?php endforeach; ?>
        </div>

    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php' ?>