<?php

use OpenEngine\Mika\Core\Helpers\Path;

// set app path
Path::setRoot(dirname(__DIR__));

// add and return di config
return require 'di.php';
