<?php
/**
 * Created by PhpStorm.
 * User: seb
 * Date: 09/10/18
 * Time: 21:08
 */
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Categorie' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/categorie/{id}', 'GET'], // action, url, HTTP method
    ],
];