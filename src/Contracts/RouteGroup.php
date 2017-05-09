<?php

namespace Articstudio\SlimInterfaces\Contracts;

use Slim\App as SlimApp;

interface RouteGroup {

    public function __invoke(SlimApp $app);
}
