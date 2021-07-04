<?php

declare(strict_types=1);

use App\Console\HelloCommand;
use Symfony\Component\Console\Application;

require __DIR__ . '/../vendor/autoload.php';

$cli = new Application('Console', '1.0');
$cli->add(new HelloCommand());
$cli->run();