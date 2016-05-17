<?php

use MyBooks\DAO\BookDAO;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handler
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new DoctrineServiceProvider());
$app->register(new TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

// Register services
$app['dao.book'] = $app->share(function ($app) {
    return new BookDAO($app['db']);
});
