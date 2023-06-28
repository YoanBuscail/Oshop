<?php

class MainController
{
    public function test()
    {
        $model = new Category();
        $productsList = $model->findAll();

        $product = $model->find(2);

        dd($productsList, $product);
    }

    public function home()
    {
        $this->show("home");
    }

    public function legalNotice()
    {
        $this->show("legal_notice");
    }

    public function generalTerms()
    {
        $this->show("general_terms");
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