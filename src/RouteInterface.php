<?php

namespace SlimInterfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface RouteInterface
{

  public function __invoke(RequestInterface $request, ResponseInterface $response, array $args);
}
