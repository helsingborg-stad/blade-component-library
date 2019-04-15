<?php

namespace BladeComponentLibrary;

use \HelsingborgStad\GlobalBladeEngine as Blade;

class Render
{
    private $component;
    private $componentSlug;
    private $componentViewName;

    public function __construct($slug, $args)
    {
        //Get component object
        $component = Register::$data;

        //Check if component exists
        if (!isset($component->{$slug})) {
            die("Component '".$slug."' is not registered.");
        }

        //Set current component
        $this->component = $component->{$slug};

        //Set current component slug
        $this->componentSlug = $slug;

        //Set current component view name
        $this->componentViewName = self::cleanViewName($this->component->view);
    }

    /**
     * Render a view
     *
     * @return string The rendered view
     */
    public function render(): string
    {
        //Render
        return Blade::instance()->make(
            (string)$this->componentViewName
        )->render();
    }

    /**
     * Remove .blade.php from view name
     *
     * @return string Simple view name without appended filetype
     */
    public static function cleanViewName($viewName): string
    {
        return (string)str_replace('.blade.php', '', $viewName);
    }
}
