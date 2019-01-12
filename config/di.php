<?php

use Doctrine\ORM\EntityManagerInterface;
use OpenEngine\Di\DiConfig;
use OpenEngine\Http\Message\Request\RequestFactory;
use OpenEngine\Http\Message\Stream\StreamFactory;
use OpenEngine\Http\Message\Uri\UriFactory;
use OpenEngine\Mika\Core\Components\Route\Interfaces\RouteConfigInterface;
use OpenEngine\Mika\Core\Components\Route\Interfaces\RouteInterface;
use OpenEngine\Mika\Core\Components\Route\Route;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

// add db settings
$entityManager = require 'db/doctrine.php';
$routeConfig = require 'route.php';

$diConfig = new DiConfig();
$diConfig->registerObject(EntityManagerInterface::class, $entityManager);
$diConfig->registerObject(RouteConfigInterface::class, $routeConfig);
$diConfig->register(RouteInterface::class, Route::class);
$diConfig->register(RequestFactoryInterface::class, RequestFactory::class);
$diConfig->register(StreamFactoryInterface::class, StreamFactory::class);
$diConfig->register(UriFactoryInterface::class, UriFactory::class);


return $diConfig;