<?php

namespace BladeComponentLibrary;

class Init
{

    public function __construct()
    {
        Register::setCachePath(
            __DIR__ . '/cache/'
        ); 

        Register::addViewPath(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        ); 

        Register::addControllerPath(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );

        Register::registerInternalComponents(
            __DIR__ . DIRECTORY_SEPARATOR . "Component" . DIRECTORY_SEPARATOR
        );

    }
    
}