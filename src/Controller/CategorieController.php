<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 09/10/18
 * Time: 21:25
 */
namespace Controller;

use Model;
use Twig_Loader_Filesystem;
use Twig_Environment;
class CategorieController
{
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }
    public function index(){
        $categorieManager = new Model\CategorieManager();
        $categories = $categorieManager->selectAllCategorie();
        return $this->twig->render('categorie.html.twig', ['categorie' => $categories]);
    }

    public function show($id) //
    {
        $categorieManager = new Model\CategorieManager();
        $categorie = $categorieManager->selectOneCategorie($id);

        return $this->twig->render('showCategorie.html.twig', ['categorie' => $categorie]);
    }
}