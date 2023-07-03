<?php

/** @var \App\Models\Category[] $categoriesForHomepage */
$categoriesForHomepage = $viewData['categories_for_homepage'];

?>

<section>
    <div class="container-fluid">
        <div class="row mx-0">
            <!-- Dans la première ligne, on va boucler sur les 2 premières catégories de la liste -->
            <?php
            foreach (array_slice($categoriesForHomepage, 0, 2) as $categoryForHomePage) {
            ?>
            <div class="col-md-6">
                <div class="card border-0 text-white text-center"><img src="<?= $absoluteUrl ?>/<?= $categoryForHomePage->getPicture()?>" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4"><?= $categoryForHomePage->getName() ?></h2><a href="<?= $router->generate("category", ["id" => $categoryForHomePage->getId()]) ?>" class="btn btn-light"><?= $categoryForHomePage->getSubtitle() ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>

         <!-- Dans la 2eme ligne, on va boucler sur les 3 suivantes -->
        <div class="row mx-0">
            <?php
            foreach (array_slice($categoriesForHomepage, 2, 3) as $categoryForHomePage) {
            ?>
            <div class="col-lg-4">
                <div class="card border-0 text-white text-center"><img src="<?= $absoluteUrl ?>/<?= $categoryForHomePage->getPicture()?>" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4"><?= $categoryForHomePage->getName() ?></h2><a href="<?= $router->generate("category", ["id" => $categoryForHomePage->getId()]) ?>" class="btn btn-link text-white"><?= $categoryForHomePage->getSubtitle() ?><i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
