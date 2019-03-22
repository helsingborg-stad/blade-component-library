Blade component library
================

This is a library containing load functions and library of views with their controllers. Enables swift and precise development of static user interfaces. 

##Example usage
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

##Blade Version
This library uses blade version 5.5 wich requires PHP 7.0. If you like to use a lower version, components will have to be replaced by a publicly avabile function. 

```php
if (!function_exists('utility')) {
    /**
     * Get a utility component
     * 
     * @param string $slug       Slug of utility
     * @param array  $attributes The settings of the utility
     * 
     * @return string
     */
    function utility($slug, $attributes = array())
    {
       $utility = new Municipio\Theme\Utility($slug, $attributes);
       return $utility->render(); 
    }
}
```