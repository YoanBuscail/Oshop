<?php

// Chargement des dépendances via autoload.php de composer
require_once __DIR__ . '/../vendor/autoload.php';

/*
    - Inclure nos controllers
    - Faire un tableau qui contient les routes possibles
    - Récupérer la page demandée dans l'url avec $_GET → $_GET["_url"]
    - Faire un if else qui vérifie si la route demandée existe :
        - Soit on appel la bonne méthode du bon controller correspondant à notre route
        - Soit on affiche la page d'erreur 404
*/

require_once __DIR__ . "/../app/controllers/ErrorController.php";
require_once __DIR__ . "/../app/controllers/MainController.php";
require_once __DIR__ . "/../app/controllers/CatalogController.php";

$router = new AltoRouter();

// On spéficie d'où on part pour nos routes
// $_SERVER est une variable spéciale qui contient tout un tas d'informations.
// Attention, entre 2 machines on ne trouvera pas toujours les mêmes clés dans le tableau.
$router->setBasePath($_SERVER['BASE_URI']);
// Identique à
// $router->setBasePath("/Formation/Socle-PHP/X-Ray/S05/S05-projet-oShop-Raginwald/public");

// La méthode map sur l'objet issu de la classe Altorouter permet de définir
// nos routes et les informations éventuelles à transmettre
$router->map(
    "GET", // La méthode HTTP autorisée pour cette route
    "/",   // Partie de l'URL qui correspond à la page demandée (route)
    [
        'controller' => 'MainController',
        'method' => 'home',
    ],     // Cible le bon controller et la bonne methode
    'home' // Identifiant unique de la route
);

$router->map(
    "GET",
    "/category/[i:id]",
    [
        'controller' => 'CatalogController',
        'method' => 'category',
    ],
    'category'
);

$router->map(
    "GET",
    "/legal-notice",
    [
        'controller' => 'MainController',
        'method' => 'legalNotice',
    ],
    'legal-notice'
);

$router->map(
    "GET",
    "/general-terms",
    [
        'controller' => 'MainController',
        'method' => 'generalTerms',
    ],
    'general-terms'
);

$router->map(
    "GET",
    "/type/[i:id]",
    [
        'controller' => 'CatalogController',
        'method' => 'type',
    ],
    'type'
);

$router->map(
    "GET",
    "/brand/[i:id]",
    [
        'controller' => 'CatalogController',
        'method' => 'brand',
    ],
    'brand'
);

$router->map(
    "GET",
    "/product/[i:id]",
    [
        'controller' => 'CatalogController',
        'method' => 'product',
    ],
    'product'
);

// En gros $router->match() nous indique sur quelle route on est SI elle a été définie dans le map().
// Si elle existe, $match (ici) prendra le contenu de la route définie
// SINON elle retourne false.
$match = $router->match();

if ($match) {
    // On appelle la bonne page (bonne méthode de bon controller)

    $controller = new $match['target']['controller']();
    $method = $match['target']['method'];


    // Le dispatcher
    $controller->$method($match["params"]);
} else {
    // Erreur 404
    $controller = new ErrorController();
    $controller->error404();
}