<?php

use OpenEngine\Mika\Core\Mika;

ini_set('display_errors', 'On');

require_once '../vendor/autoload.php';

$diConfig = require '../config/main.php';

Mika::run($diConfig);