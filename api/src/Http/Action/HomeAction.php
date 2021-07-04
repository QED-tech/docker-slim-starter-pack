<?php


namespace App\Http\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeAction
{
	public function __invoke(Request $request, Response $response): Response
	{
		$response->getBody()->write(
			json_encode([
				'action' => self::class
			])
		);
		return $response->withHeader('Content-Type', 'application/json');
	}
}