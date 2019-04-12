<?php

namespace BladeComponentLibrary;

use HelsingborgStad\Blade\Blade as Blade;

class Init
{
    public function __construct()
    {
        Register::addControllerPath(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );

        Register::registerInternalComponents(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );
    }
}