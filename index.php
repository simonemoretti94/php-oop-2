<?php $head = 'Index' ?>


<?php require_once __DIR__ . '/parts/header.php' ?>
<main>
    <?php require_once __DIR__ . '/data/db.php'; ?>

    <?php var_dump($dogsProducts) ?>
    <?php var_dump($catsProducts) ?>
</main>
<?php require_once __DIR__ . '/parts/footer.php' ?>