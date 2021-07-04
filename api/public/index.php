<?php

declare(strict_types=1);

use App\Http\Action\HomeAction;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;


require __DIR__ . '/../vendor/autoload.php';

http_response_code(500);

$builder = new ContainerBuilder();
$builder->addDefinitions([
	'config' => [
		'debug' => (bool)getenv('APP_DEBUG')
	]
]);

$container = $builder->build();

$app = AppFactory::createFromContainer($container);

$app->addErrorMiddleware($container->get('config')['debug'], false, false);

$app->get('/', HomeAction::class);

$app->run();