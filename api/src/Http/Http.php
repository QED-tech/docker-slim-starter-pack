<?php


namespace App\Http;


use JsonException;
use Psr\Http\Message\ResponseInterface;

class Http
{
	/**
	 * @throws JsonException
	 */
	public static function json(ResponseInterface $response, array $data): ResponseInterface
	{
		$json = json_encode($data, JSON_THROW_ON_ERROR);
		$response->getBody()->write($json);
		return $response->withHeader('Content-Type', 'application/json');
	}
}