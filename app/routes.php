<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Home page
$app->get('/', function() use ($app) {
   $books = $app['dao.book']->findAll();
   
   ob_start();
   require __DIR__.'/../views/view.php';
   $view = ob_get_clean();
   
   return $view;
});
