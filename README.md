#Blade component library
================

This is a library containing load functions and library of views with their controllers. Enables swift and precise development of static user interfaces. 

# Example usage
```php
use helsingborg-stad/ComponentLibrary/Register as Register;

class RegisterUtility
{
    public function __construct()
    {
        Utility::setCachePath(
            WP_CONTENT_DIR . '/uploads/cache/blade-cache/utility'
        );

        Utility::addViewPath(
            MUNICIPIO_PATH . 'views/utility'
        ); 

        Utility::addControllerPath(
            MUNICIPIO_PATH . 'library/Controller/Utility/'
        );

        Utility::add(
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

        Utility::add(
            'date',
            [
                'hasTime' => false,
                'hasDate' => true, 
                'isHumanReadable' => true
            ],
            'date-time.blade.php' 
        );
    }
}
```