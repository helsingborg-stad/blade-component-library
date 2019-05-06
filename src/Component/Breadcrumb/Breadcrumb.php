<?php

namespace BladeComponentLibrary\Component\Breadcrumb;

class Breadcrumb extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "c-breadcrumb"; 
    }
}