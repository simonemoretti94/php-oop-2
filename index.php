<?php $head = 'Index' ?>


<?php require_once __DIR__ . '/parts/header.php' ?>
<main>
    <?php require_once __DIR__ . '/data/db.php'; ?>

    <div class="d-none">
        <?php var_dump($dogsProducts) ?>
        <?php var_dump($catsProducts) ?>
    </div>

    <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12 d-none">
        <p><?= $dogsProducts[0]->name ?></p>
        <p><?= $dogsProducts[0]->price ?></p>
        <img src="<?= $dogsProducts[0]->path ?>" alt="<?= $dogsProducts[0]->name ?>">
        <div class="row">
            <?php foreach ($dogsProducts[0]->categories as $category) : ?>
                <p class="col-xxl-3 col-xl-3 col-md-4 col-sm-6"><?= $category ?></p>
            <?php endforeach; ?>
        </div>

    </div>

    <div id="card" class="card col-xxl-3 col-lg-3 col-md-6 col-sm-12">
        <img class="card-img-top p-1" src="<?= $dogsProducts[0]->path ?>" alt="<?= $dogsProducts[0]->name ?>">
        <div class="card-body d-flex ">
            <h4 class="card-title col-10"><?= $dogsProducts[0]->name ?></h4>
            <p class="card-text col-2"><?= $dogsProducts[0]->price ?>&euro;</p>
        </div>
        <div class="card-footer">
            <div class="row justify-content-evenly ">
                <?php foreach ($dogsProducts[0]->categories as $category) : ?>
                    <p class="col-xxl-3 col-xl-3 col-md-4 col-sm-4"><?= $category ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php' ?>

<style>
    #card {
        max-height: 300px;
        max-width: 400px;

        & img {
            width: 100%;
            aspect-ratio: 1 / 1;
        }
    }

    .row {
        >p {
            text-align: center;
            border: solid 1px black;
            border-radius: 8px;
        }
    }
</style>