<?php

declare(strict_types=1);

use DI\Container;

require __DIR__ . '/../vendor/autoload.php';

http_response_code(500);

/** @var Container $container */
$container = require __DIR__ . '/../config/container.php';
$app = (require __DIR__ . '/../config/bootstrap.php')($container);
$app->run();