<?php


namespace App\Http\Action;

use App\Http\Http;
use JsonException;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeAction
{
	/**
	 * @throws JsonException
	 */
	public function __invoke(Request $request, Response $response): Response
	{
		return Http::json($response, ['action' => self::class]);
	}
}