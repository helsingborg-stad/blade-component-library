<?php

namespace BladeComponentLibrary;

class Init
{

    public function __construct()
    {
        include 'Public.php'; 

        Register::setCachePath(
            sys_get_temp_dir() . '/blade-component-library/cache/'
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

        /* 
            Manually register component
            
            Register::add(
                'button',
                [
                    'isPrimary' => true,
                    'isDisabled' => false, 
                    'isOutlined' => true,

                    'label' => "Button text",
                    'href' => "https://google.se",

                    'target' => "_self"
                ],
                'button.blade.php' // You can leave this out, it will automatically be generated from slug. 
            );
        */

    }
    
}