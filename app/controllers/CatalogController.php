<?php

class CatalogController
{
    public function category($params)
    {
        // Maintenant on peut récupérer la bonne catégories dans la DB
        // Vu qu'on n'a pas encore de db, pour l'instant on va se contenter de passer l'id à la vue pour l'afficher.

        $this->show("products_list", ["id" => $params["id"], "title" => "Catégorie"]);
    }

    public function type($params)
    {
        $this->show("products_list", ["id" => $params["id"], "title" => "Type"]);
    }

    public function brand($params)
    {
        $this->show("products_list", ["id" => $params["id"], "title" => "Marque"]);
    }

    public function product($params)
    {
        $this->show("product", ["id" => $params["id"]]);
    }

    /**
     * Affiche la page
     *
     * @param string $viewName
     * @param array $viewData (Facultatif)
     */
    private function show($viewName, $viewData = [])
    {
        global $router; // Ce truc là, c'est DÉGUEULASSE.

        $absoluteUrl = $_SERVER["BASE_URI"];

        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}