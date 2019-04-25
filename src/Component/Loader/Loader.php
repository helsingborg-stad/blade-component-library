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

        if (in_array($this->data['shape'], $shapes)) {
            $this->data['classList'][] = 'loader' . '--' . $this->data['shape'];
        }

        if (in_array($this->data['size'], $sizes)) {
           $this->data['classList'][] = 'loader' . '--' . $this->data['size'];
        }

        // Add base class
        array_unshift($this->data['classList'], 'loader');
    }
}
