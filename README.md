BETA: Blade component library
================

This is a library containing load functions and library of views with their controllers. Enables swift and precise development of static user interfaces across multiple products. The package is designed to be used standalone or with WordPress as CMS engine. 

Important note: This is a view package! Not a single line of CSS or Javascript will be appended. We (will, not complete yet) have a separate package to provide these feature in a syleguide format. 

## Getting started
Recommended method of usage is with composer. Add the requirement below, to enable a new set of awesome features. 

```
composer reqire helsingborg-stad/blade-component-library
```

## Example usage
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

## Blade Version
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

## Implement replacement views & controllers
This package is designed to be overrided with a theme or plugins own views. Simply add a new path as below. You have an ability to prepend or append the existing search arrays. The path's will be searched chronologically. 

```php
//Adds a new view search path
Utility::addViewPath(
    MUNICIPIO_PATH . 'views/utility',
    false //Prepend = true
); 

//Adds a new controller search path
Utility::addControllerPath(
    MUNICIPIO_PATH . 'library/Controller/Utility/',
    false //Prepend = true
);
```

## Built With 

- PHP 
- Laravel Blade

## Dependencies
- Laravel Blade 5.5 (incldued in package)

## Releases

https://github.com/helsingborg-stad/blade-component-library/releases

## Authors

- Sebastian Thulin 

## License 

This project is licensed under the MIT License - see the LICENSE file for details