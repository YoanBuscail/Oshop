<section>
    <div class="container-fluid">
        <div class="row mx-0">
            <?php
            $categorypreums = array_slice($viewData["categoriesHomePage"], 0, 2); 
            foreach ($categorypreums as $categoryHome) {
            ?>
            <div class="col-md-6">
                <div class="card border-0 text-white text-center"><img src="<?= $absoluteUrl ?>/<?= $categoryHome->getPicture()?>" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4"><?= $categoryHome->getName() ?></h2><a href="<?= $router->generate("category", ["id" => $categoryHome->getId()]) ?>" class="btn btn-light"><?= $categoryHome->getSubtitle() ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="container-fluid">
        <div class="row mx-0">
            <?php
            $categorypreums = array_slice($viewData["categoriesHomePage"], 2); 
            foreach ($categorypreums as $categoryHome) {
            ?>
            <div class="col-lg-4">
                <div class="card border-0 text-white text-center"><img src="<?= $absoluteUrl ?>/<?= $categoryHome->getPicture()?>" alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4"><?= $categoryHome->getName() ?></h2><a href="<?= $router->generate("category", ["id" => $categoryHome->getId()]) ?>" class="btn btn-link text-white"><?= $categoryHome->getSubtitle() ?><i class="fa-arrow-right fa ml-2"></i></a>
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
