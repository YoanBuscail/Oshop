<?php

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

$routes = [
    "/" => [
        "controller" => "MainController",
        "method" => "home",
    ],
    "/category" => [
        "controller" => "CatalogController",
        "method" => "category",
    ],
];

// if (isset($_GET['_url'])) {
//     $currentPage = $_GET['_url'];
// } else {
//     $currentPage = '/';
// }

// Version ternaire du if else ci-dessus → condition ? alors : sinon
// $currentPage = isset($_GET['_url']) ? $_GET['_url'] : '/';

// Version coalescence (version super Sayen :P)
$currentPage = $_GET['_url'] ?? '/';

if (!empty($routes[$currentPage])) {
    // On appelle la bonne page (bonne méthode de bon controller)

    $controller = new $routes[$currentPage]['controller']();
    $method = $routes[$currentPage]['method'];

    // Le dispatcher
    $controller->$method();
} else {
    // Erreur 404
    $controller = new ErrorController();
    $controller->error404();
}