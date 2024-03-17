<?php $head = 'Index' ?>


<?php require_once __DIR__ . '/parts/header.php' ?>
<main>
    <?php require_once __DIR__ . '/data/db.php'; ?>

    <div class="d-none">
        <?php var_dump($dogsProducts) ?>
        <?php var_dump($dogsProducts[0]) ?>
    </div>

    <div class="container-fluid mt-2 d-none ">
        <div class="row">

            <div id="card" class="card col-xxl-3 col-lg-3 col-md-4 col-sm-6">
                <div class="card-header">
                    <img class="card-img-top p-1" src="<?= $dogsProducts[0]->path ?>" alt="<?= $dogsProducts[0]->name ?>">
                </div>
                <div class="card-body d-flex ">
                    <h4 class="card-title col-10"><?= $dogsProducts[0]->name ?></h4>
                    <p class="card-text col-2"><?= $dogsProducts[0]->price ?>&euro;</p>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-evenly ">
                        <?php foreach ($dogsProducts[0]->categories as $category) : ?>
                            <p class="col-xxl-3 col-xl-3 col-md-5 col-sm-6"><?= $category ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-evenly ">
            <?php foreach ($dogsProducts as $product) : ?>

                <div id="wrapper-padding " class="col-xxl-3 col-lg-4 col-md-4 col-sm-6">
                    <div id="card" class="card ">
                        <div class="card-header">
                            <img class="card-img-top p-1" src="<?= $product->path ?>" alt="<?= $product->name ?>">
                        </div>
                        <div class="card-body d-flex justify-content-between  ">
                            <h4 class="card-title col-lg-10 col-md-8 col-sm-8"><?= $product->name ?></h4>
                            <h6 class="card-title col-lg-10 col-md-8 col-sm-8"><?= $product->name ?></h6>
                            <p class="card-text col-lg-2 col-md-4 col-sm-4 " style="text-align: right;"><?= $product->price ?>&euro;</p>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-evenly ">
                                <?php foreach ($product->categories as $category) : ?>
                                    <div id="wrapper-padding" class="col-xxl-4 col-xl-4 col-md-6 col-sm-6">
                                        <p><?= $category ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <div class="container-fluid my-3">
        <div class="row justify-content-evenly ">
            <?php foreach ($catsProducts as $product) : ?>

                <div id="wrapper-padding " class="col-xxl-3 col-lg-4 col-md-4 col-sm-6">
                    <div id="card" class="card ">
                        <div class="card-header">
                            <img class="card-img-top p-1" src="<?= $product->path ?>" alt="<?= $product->name ?>">
                        </div>
                        <div class="card-body d-flex justify-content-between  ">
                            <h4 class="card-title col-lg-10 col-md-8 col-sm-8"><?= $product->name ?></h4>
                            <h6 class="card-title col-lg-10 col-md-8 col-sm-8"><?= $product->name ?></h6>
                            <p class="card-text col-lg-2 col-md-4 col-sm-4 " style="text-align: right;"><?= $product->price ?>&euro;</p>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-evenly ">
                                <?php foreach ($product->categories as $category) : ?>
                                    <div id="wrapper-padding" class="col-xxl-4 col-xl-4 col-md-6 col-sm-6">
                                        <p><?= $category ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>

    </div>
</main>


<?php require_once __DIR__ . '/parts/footer.php' ?>

<style>
    #card {
        height: 450px;

        >.card-header {
            height: 300px;

            >img {
                width: 100%;
                height: 100%;
            }

            >img:hover {
                transform: scale(.99);
                border-radius: 8px;
            }
        }

        & .card-body {
            height: 50px;
        }

        & .card-footer {
            height: auto;

            >.row {
                & p {
                    text-align: center;
                    border: solid 1px black;
                    border-radius: 8px;

                    font-size: small;
                    padding: 0;


                }
            }
        }
    }

    h4:hover,
    h6:hover {
        color: red;
        text-decoration: underline;
        font-weight: 500;
    }

    #wrapper-padding {
        padding: .5rem;

        >p:hover {
            transform: scale(.9);
            background-color: rgb(6, 220, 6);
            color: white;
        }
    }

    @media screen and (min-width: 576px) {
        .card-body {
            & h4 {
                display: block;
            }

            & h6 {
                display: none;
            }

        }
    }


    @media screen and (max-width: 576px) {

        .card-body {
            & h4 {
                display: none;
            }

            & h6 {
                display: block;
            }

        }
    }
</style>