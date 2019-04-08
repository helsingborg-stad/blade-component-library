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
        //If data is sent as json, make it an array. 
        if(is_string($attributes) && $jsonData = json_decode($attributes)) {
            $attributes = $jsonData; 
        }

        //Render component
        $component = new \BladeComponentLibrary\Render($slug, $attributes);
        return $component->render(); 
    }
}