<?php
/**
 * Created by PhpStorm.
 */

namespace Controller;

// src/Controller/ItemController.php

use Model;

class ItemController //affiche tous les items de base
{
    public function index(){
        $itemManager = new Model\ItemManager();
        $item = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
        return $item;
    }

    public function show(int $id) //
    {
        $itemManager = new model\ItemManager();
        $item = $itemManager->selectOneItem($id);

        require __DIR__ . '/../View/showItem.php';
    }

}


