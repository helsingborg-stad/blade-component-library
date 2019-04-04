<?php
if (!function_exists('component')) {
    /**
     * Render a component
     * 
     * @param string $slug       Slug of utility
     * @param array  $attributes The settings of the utility
     * 
     * @return string
     */
    function component($slug, $attributes = array())
    {
       $component = new \BladeComponentLibrary\Render($slug, $attributes);
       return $component->render(); 
    }
}