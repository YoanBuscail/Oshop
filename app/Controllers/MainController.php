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
        $model = new Category();
        $categoriesList = $model->findHome();
        $this->show("home",
        [
            "categoriesHomePage" => $categoriesList,
        ]);
        
    }

    public function legalNotice()
    {
        $this->show("legal_notice");
    }
}