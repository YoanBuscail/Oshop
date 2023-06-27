<?php

class MainController
{
    public function home()
    {
        $this->show("home");
    }

    public function legalNotice()
    {
        $this->show("legal-notice");
    }

    /**
     * Affiche la page
     *
     * @param string $viewName
     * @param array $viewData (Facultatif)
     */
    private function show($viewName, $viewData = [])
    {
        $absoluteURL = $_SERVER['BASE_URI'];

        require_once __DIR__ . "/../views/header.tpl.php";
        require_once __DIR__ . "/../views/$viewName.tpl.php";
        require_once __DIR__ . "/../views/footer.tpl.php";
    }
}