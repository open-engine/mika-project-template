<?php

use OpenEngine\Mika\Core\Mika;

error_reporting(E_ALL);
ini_set('display_errors', 'true');

require_once '../vendor/autoload.php';

$diConfig = require '../config/main.php';

Mika::run($diConfig);
