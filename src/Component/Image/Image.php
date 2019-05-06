<?php

namespace BladeComponentLibrary\Component\Image;

class Image extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-image"; 

        //Add placeholder class
        if(!$src) {
            $this->data['classList'][] = "is-placeholder"; 
        }

        //Inherit the alt text
        if(!$alt && $caption) {
            $this->data['alt'] = $this->data['caption'];
        }
    }
}