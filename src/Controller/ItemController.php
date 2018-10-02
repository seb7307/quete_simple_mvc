<?php
/**
 * Created by PhpStorm.
 */

namespace Controller;

// src/Controller/ItemController.php

use Model;

class ItemController
{
    public function index(){
        $itemManager = new Model\ItemManager();
        $item=$itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
        return $item;
    }
}


