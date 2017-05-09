<?php

namespace Articstudio\SlimInterfaces\Contracts;

use Slim\App as SlimApp;

interface RouteGroup {

    public static function getPattern(): string;

    public function __invoke(SlimApp $app);
}
