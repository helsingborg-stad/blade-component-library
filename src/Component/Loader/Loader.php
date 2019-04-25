<?php

namespace BladeComponentLibrary\Component\Loader;

class Loader extends \BladeComponentLibrary\Component\BaseController
{
    public function init()
    {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $shapes = array('circular', 'linear');
        $sizes = array('xs', 'sm', 'md', 'lg', 'xl');

        if (in_array($shape, $shapes)) {
            $this->data['classList'][] = 'loader' . '--' . $shape;
        }

        if (in_array($size, $sizes)) {
           $this->data['classList'][] = 'loader' . '--' . $size;
        }

        // Add base class
        array_unshift($this->data['classList'], 'loader');
    }
}
