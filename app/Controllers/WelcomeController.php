<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class WelcomeController
{
    public function index(ServerRequestInterface $request, ResponseInterface $response)
    {
        $response->getBody()->write('<h1>Hello, World!</h1>');

        return $response;
    }
}
