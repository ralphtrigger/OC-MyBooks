<?php

use MyBooks\DAO\AuthorDAO;
use MyBooks\DAO\BookDAO;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handler
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new DoctrineServiceProvider());
$app->register(new TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));
$app->register(new UrlGeneratorServiceProvider());

// Register services
$app['dao.author'] = $app->share(function ($app) {
    return new AuthorDAO($app['db']);
});

$app['dao.book'] = $app->share(function ($app) {
    $bookDAO = new BookDAO($app['db']);
    $bookDAO->setAuthorDAO($app['dao.author']);
    return $bookDAO;
});

