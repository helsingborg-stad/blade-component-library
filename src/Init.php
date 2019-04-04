<?php

namespace BladeComponentLibrary;

use HelsingborgStad\Blade\Blade as Blade;

class Init
{

    public function __construct()
    {
        include 'Public.php'; 

        Register::setCachePath(
            sys_get_temp_dir() . '/blade-component-library/cache/'
        ); 

        Register::addViewPath(
            __DIR__ . DIRECTORY_SEPARATOR . "View" . DIRECTORY_SEPARATOR
        ); 

        Register::addControllerPath(
            __DIR__ . DIRECTORY_SEPARATOR . "Controller" . DIRECTORY_SEPARATOR
        );

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

        Register::add(
            'date',
            [
                'hasTime' => false,
                'hasDate' => true, 
                'isHumanReadable' => true
            ],
            'date-time.blade.php'
        );

        Register::add(
            'card',
            [
                'hasTime' => false,
                'hasDate' => true, 
                'isHumanReadable' => true
            ],
            'card.blade.php'
        );
    }
    
}