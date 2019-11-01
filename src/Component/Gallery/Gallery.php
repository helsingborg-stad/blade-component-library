<?php

namespace BladeComponentLibrary\Component\Gallery;

class Gallery extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "c-gallery"; 

        //Get unique id
        $this->data['uniqueId'] = "gallery_" . uniqid();
    }
}

