<?php

class ControllerModel
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

        $categoryModel = new Category();
        $categoriesList = $categoryModel->findAll("name");

        $typeModel = new Type();
        $typesList = $typeModel->findAll("name");

        $brandModel = new Brand();
        $brandsList = $brandModel->findAll("name");

        $productModel = new Product();
        $productsList = $productModel->findAll("name");

        $absoluteUrl = $_SERVER["BASE_URI"];

        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}