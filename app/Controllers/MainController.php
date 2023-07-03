<?php

namespace App\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;

class MainController extends CoreController
{
    public function test()
    {
        $model = new Product();
        $productsList = $model->findAll();
        $product = $model->find(5);
        dump($productsList, $product);

        $model = new Brand();
        $brandsList = $model->findAll();
        $brand = $model->find(5);
        dump($brandsList, $brand);

        $model = new Type();
        $typesList = $model->findAll();
        $type = $model->find(5);
        dump($typesList, $type);

        $model = new Category();
        $categoriesList = $model->findAll();
        $category = $model->find(5);
        dump($categoriesList, $category);
    }

    public function home()
    {
        // Récupérer les catégories à mettre en avant sur la page d'accueil (les 5 qui ont un ordre précis en BDD).
        // Au final, ce qu'on veut ce sont des Categories -> donc model Category.
        $categoryModel = new Category();
        $categoriesForHomepage = $categoryModel->findAllForHomepage();

        // Les donner à la vue.
        // Dans la vue, il faudra faire l'affichage dynamique à partir de ces données.

        $this->show("home", [
            "categories_for_homepage" => $categoriesForHomepage
        ]);
    }

    public function legalNotice()
    {
        $this->show("legal_notice");
    }

    public function generalTerms()
    {
        $this->show("general_terms");
    }
}