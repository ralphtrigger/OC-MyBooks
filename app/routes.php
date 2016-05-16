<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Home page
$app->get('/', function() {
    ob_start();
    require '../src/modele.php';
    $books = getBooks();
    require '../views/view.php';

    return ob_get_clean();
});
