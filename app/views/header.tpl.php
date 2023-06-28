<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= $asoluteUrl ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $asoluteUrl ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= $asoluteUrl ?>/assets/css/styles.css">
    <title>oShop</title>
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-7 d-none d-sm-block">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item pr-3 mr-0">
                                <i class="fa fa-phone"></i> 01 02 03 04 05
                            </li>
                            <li class="list-inline-item px-3 border-left d-none d-lg-inline-block">Livraison offerte à partir de 100€</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
            <div class="container-fluid">
                <!-- Navbar Header  -->
                <a href="<?= $router->generate('home') ?>" class="navbar-brand">oShop</a>
                <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                <!-- Navbar Collapse -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a href="<?= $router->generate('home') ?>" class="nav-link active">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Catégories</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="products_list.tpl.php">Au travail</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Cérémonie</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Détente</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Piscine et bains</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Sortir</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Sport</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Vintage</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Types de produits</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="products_list.tpl.php">Chaussons</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Chaussures de sport</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Chaussures de ville</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Chaussures ouvertes</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Pantoufles</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Talons</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Marques</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="products_list.tpl.php">BOOTstrap</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">O'shoes</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">oCirage</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">oPompes</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">Pattes d'eph</a>
                                    <a class="dropdown-item" href="products_list.tpl.php">PHPieds</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>