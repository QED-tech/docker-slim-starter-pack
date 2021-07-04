<?php


namespace App\Http\Action;

use App\Http\HttpResponse;
use JsonException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomeAction implements RequestHandlerInterface
{
	/**
	 * @throws JsonException
	 */
	public function handle(ServerRequestInterface $request): ResponseInterface
	{
		return new HttpResponse(['action' => self::class]);
	}
}