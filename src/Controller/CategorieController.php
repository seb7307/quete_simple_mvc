<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 04/10/18
 * Time: 15:22
 */

namespace Controller;

use Model;

class CategorieController
{
    public function index(){
        $categorieManager = new Model\CategorieManager();
        $categorie = $categorieManager->selectAllCategorie();
        require __DIR__ . '/../View/categorie.php';
    }

    public function show(int $id) //
    {
        $categorieManager = new Model\CategorieManager();
        $categorie = $categorieManager->selectOneCategorie($id);

        require __DIR__ . '/../View/showCategorie.php';
    }
}