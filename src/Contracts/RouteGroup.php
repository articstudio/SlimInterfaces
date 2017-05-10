<?php

namespace Articstudio\SlimInterfaces\Contracts;

interface RouteGroup {

    public static function getPattern(): string;

    public function __invoke();
}
