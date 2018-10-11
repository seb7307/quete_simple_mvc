<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 09/10/18
 * Time: 17:37
 */

namespace Controller;

// use Model\ItemManager;
use Model;
use Twig_Loader_Filesystem;
use Twig_Environment;


class ItemController //affiche tous les items de base
{
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
    $itemManager = new Model\ItemManager();
    $items = $itemManager->selectAllItems();

    return $this->twig->render('item.html.twig', ['items' => $items]);
 }

    public function show($id) //
    {
        $itemManager = new Model\ItemManager();
        $items = $itemManager->selectOneItem($id);

        return $this->twig->render('showItem.html.twig', ['item' => $items]);
    }

}