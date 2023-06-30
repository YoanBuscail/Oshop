<?php

namespace App\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Type;

class CoreController
{
    /**
     * Affiche la page
     *
     * @param string $viewName
     * @param array $viewData (Facultatif)
     */
    protected function show($viewName, $viewData = [])
    {
        global $router; // Ce truc là, c'est DÉGUEULASSE.

        $absoluteUrl = $_SERVER["BASE_URI"];

        $categoryModel = new Category();
        $categoriesList = $categoryModel->findAll("name");

        $typeModel = new Type();
        $typesList = $typeModel->findAll("name");

        $brandModel = new Brand();
        $brandsList = $brandModel->findAll("name");

        // Ici, on crée une "copie" de $typeList avec une petite différence : les index seront les id des type.
        // Avantage : il sera très simple de piocher le bon type dans cette liste là.
        // Exemple : Si on veut récupérer le type 7, on aura juste à faire $typesListById[7].
        $typesListById = [];
        foreach ($typesList as $typeElement) {
            $typesListById[$typeElement->getId()] = $typeElement;
        }

        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}