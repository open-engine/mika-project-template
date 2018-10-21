<?php

use OpenEngine\Mika\Core\Components\Route\RouteConfig;

$routeConfig = new RouteConfig();

$routeConfig->register('default','App\Main\Controllers');

return $routeConfig;
