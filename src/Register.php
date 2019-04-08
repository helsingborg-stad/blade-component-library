<?php

namespace BladeComponentLibrary;

use HelsingborgStad\Blade\Blade as Blade;

class Register
{
    public static $data;
    public static $cachePath = ""; 
    public static $viewPaths = [];
    public static $controllerPaths = [];

    private static $_reservedNames = ["data"];

    public static function add($slug, $defaultArgs, $view = null)
    {
        //Create utility data object
        if(is_null(self::$data)) {
            self::$data = (object) array();
        }

        //Prohibit reserved names
        if(in_array($slug, self::$_reservedNames)) {
            throw new \Exception("Invalid slug (" . $slug . ") provided, cannot be used as a view name since it is reserved for internal purposes.");
        }

        //Get view name
        $view = self::getViewName($slug, $view); 

        //Check if valid slug name
        if (self::sanitizeSlug($slug) != $slug) {
            throw new \Exception("Invalid slug (" . $slug . ") provided, must be a lowercase string only containing letters and hypens.");
        }
 
        //Check if valid view name
        if ((self::sanitizeSlug($view) . ".blade.php") != $view) {
            throw new \Exception("Invalid view name (" . $view . ") provided, must be a lowercase string only containing letters and hypens (with exception for .blade.php filetype suffix).");
        }

        //Adds to full object
        self::$data->{$slug} = (object) array(
            'slug'       => (string) $slug,
            'args'       => (object) $defaultArgs,
            'view'       => (string) $slug . DIRECTORY_SEPARATOR . $view,
            'controller' => (string) $slug
        );
    }

    /**
     * Updates the cache path 
     * 
     * @return string The new cache path
     */
    public static function setCachePath($path) : string
    {
        return self::$cachePath = $path;
    }

    /**
     * Appends the view path object
     * 
     * @return string The updated object with view paths
     */
    public static function addViewPath($path, $prepend = true) : array
    {
        //Sanitize path
        $path = rtrim($path, "/");

        //Push to location array
        if($prepend === true) {
            if (array_unshift(self::$viewPaths, $path)) {
                return self::$viewPaths;
            }
        } else {
            if (array_push(self::$viewPaths, $path)) {
                return self::$viewPaths;
            }
        }
        
        //Error if something went wrong
        throw new \Exception("Error appending view path: " . $path);
    }

    /**
     * Appends the controller path object 
     * 
     * @return string The updated object with controller paths
     */
    public static function addControllerPath($path, $prepend = true) : array 
    {
        //Sanitize path
        $path = rtrim($path, "/");

        //Push to location array
        if($prepend === true) {
            if (array_unshift(self::$controllerPaths, $path)) {
                return self::$controllerPaths;
            }
        } else {
            if (array_push(self::$controllerPaths, $path)) {
                return self::$controllerPaths;
            }
        }
        
        //Error if something went wrong
        throw new \Exception("Error appending controller path: " . $path);
    }

    /**
     * Registers components directory
     * 
     * @return string The sluts of all registered components
     */
    public static function registerInternalComponents($path) : array 
    {
        //Declare
        $result = array(); 

        //Sanitize path
        $basePath = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . "*";

        //Glob
        $locations = glob($basePath); 

        //Loop over each path
        if(is_array($locations) && !empty($locations)) {
            foreach($locations as $path) {

                //Check if folder
                if(!is_dir($path)) {
                    continue; 
                }

                //Locate config file
                $configFile = glob($path . DIRECTORY_SEPARATOR . "*.json"); 

                //Get first occurance of config
                if(is_array($configFile) && !empty($configFile)) {
                    $configFile = array_pop($configFile); 
                } else {
                    throw new \Exception("No config file found in " . $path);
                }

                //Read config
                if(!$configJson = file_get_contents($configFile)) {
                    throw new \Exception("Configuration file unreadable at " . $path);
                }

                //Check if valid json
                if(!$configJson = json_decode($configJson, true)) {
                    throw new \Exception("Invalid formatting of configuration file in " . $path);
                }

                //Register the component
                self::add(
                    $configJson['slug'],
                    $configJson['default'],
                    $configJson['view'] ? $configJson['view'] : $configJson['slug'] . "blade.php"
                );

                //Log 
                $result[] = $configJson['slug']; 
            }
        }

        return $result; 
    }

    /**
     * Use defined view or, generate from slug
     * 
     * @return string The view name included filetype
     */
    private static function getViewName($slug, $view = null) : string
    {
        if (is_null($view)) {
            $view = $slug . '.blade.php'; 
        }
        return $view;
    }

    /**
     * Santize string
     * 
     * @return string The string to be sanitized
     */
    private static function sanitizeSlug($string) : string 
    {
        return preg_replace(
            "/[^a-z-]/i", 
            "", 
            str_replace(".blade.php", "", $string)
        );
    }
}