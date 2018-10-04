<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
    ],
    'Categorie' => [
        ['index', '/categorie', 'GET'], // action, url, HTTP method
        ['show', '/categorie/{id}', 'GET'], // action, url, HTTP method

    ],
];