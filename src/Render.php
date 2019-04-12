<?php
namespace BladeComponentLibrary;

use \HelsingborgStad\GlobalBladeEngine as Blade; 

class Render
{
    private $component;
    private $componentSlug;
    private $componentViewName;
    private $componentArgs;
    private $componentControllerName;

    private $viewArgs;
    private $controllerArgs;
    private $defaultArgs;

    public function __construct($slug, $args) {

        //Get component object
        $component = Register::$data;

        //Check if component exists
        if(!isset($component->{$slug})) {
            die("Component '" . $slug . "' is not registered.");
        }

        //Set current component
        $this->component = $component->{$slug};

        //Set current component slug
        $this->componentSlug = $slug;

        //Set current component view name
        $this->componentViewName = $this->cleanViewName($this->component->view);

        //Get the component controller name
        $this->componentControllerName = $this->camelCase(
            $this->cleanViewName($this->component->controller)
        );

        //Get data
        $this->defaultArgs = (array) $component->{$slug}->args;
        $this->viewArgs = (array) $args;
        $this->controllerArgs = (array) $this->getControllerArgs(
            array_merge($this->defaultArgs, $this->viewArgs)
        );
    }

    /**
     * Get data from controller
     *
     * @return string Array of controller data
     */
    public function getControllerArgs($data) : array {

        //Locate the controller
        $controller = $this->locateController($this->componentControllerName);

        //Run controller & fetch data
        if ($controller != false) {
            $controller = (string) ("\\" . $this->getNamespace($controller) . "\\" . $this->componentControllerName);
            $controller = new $controller($data);
            return $controller->getData();
        }

        return array();
    }

    /**
     * Render a view
     *
     * @return string The rendered view
     */
    public function render() : string
    {        
        //Render
        return Blade::instance()->make(
            (string) $this->componentViewName,
            (array) $this->controllerArgs
        )->render();
    }

    /**
     * Remove .blade.php from view name
     *
     * @return string Simple view name without appended filetype
     */
    public function cleanViewName($viewName) : string
    {
        return (string) str_replace('.blade.php', '', $viewName);
    }

    /**
     * Merge attributes fallback to default
     *
     * @return string Arguments array merged with default and local
     */
    private function mergeArgs($defaultArgs, $localArgs) : array
    {
        return array_merge(
            (array) $defaultArgs,
            (array) $localArgs
        );
    }

    /**
     * Creates a camelcased string from hypen based string
     *
     * @return string The expected controller name
     */
    public function camelCase($viewName) : string
    {
        return (string) str_replace(
            " ", "", ucwords(
                str_replace('-', ' ', $viewName)
            )
        );
    }

    /**
     * Tries to locate a controller
     *
     * @return string Controller path
     */
    public function locateController($controller)
    {

        if(is_array(Register::$controllerPaths) && !empty(Register::$controllerPaths)) {

            foreach (Register::$controllerPaths as $path) {

                $file = $path . DIRECTORY_SEPARATOR . $controller . DIRECTORY_SEPARATOR .$controller  . '.php';

                if (!file_exists($file)) {
                    continue;
                }
                return $file;
            }
        }

        return false;
    }

    /**
     * Get a class's namespace
     *
     * @param  string $classPath Path to the class php file
     *
     * @return string            Namespace or null
     */
    public function getNamespace($classPath)
    {
        $src = file_get_contents($classPath);

        if (preg_match('/namespace\s+(.+?);/', $src, $m)) {
            return $m[1];
        }

        return null;
    }
}
