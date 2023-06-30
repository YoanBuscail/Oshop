<?php

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
        $this->show("home");
    }

    public function legalNotice()
    {
        $this->show("legal_notice");
    }

    
}