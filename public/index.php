<?php

ini_set('display_errors', 1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Service.php';

$app = new \Optimy\OnlineBakery\Service();
$app->run();
