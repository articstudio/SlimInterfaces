<?php

namespace Articstudio\SlimInterfaces\Contracts;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface Route {

    public static function getMethods(): array;

    public static function getPattern(): string;

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args);
}
