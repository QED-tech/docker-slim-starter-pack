<?php

declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/../vendor/autoload.php';

http_response_code(500);

$container = new Container();

$app = AppFactory::createFromContainer($container);

$app->addErrorMiddleware((bool)getenv('APP_DEBUG'), false, false);

$app->get('/', function (Request $request, Response $response, array $args) {
	$response->getBody()->write(json_encode([
		'name' => 'qed'
	]));
	return $response->withHeader('Content-Type', 'application/json');
});

$app->run();