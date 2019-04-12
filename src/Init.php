<?php

namespace BladeComponentLibrary;

use \HelsingborgStad\GlobalBladeEngine as Blade;

class Init
{
    public function __construct()
    {
        //Add view path to renderer
        Blade::addViewPath(__DIR__ . '/Component');

        Register::addControllerPath(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );

        Register::registerInternalComponents(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );
    }
}