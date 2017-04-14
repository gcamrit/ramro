<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class SampleMiddleware
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next)
    {
        $response->getBody()->write('Content from middleware <br>');
        // do something amazing here
        return $next($request, $response);
    }
}
