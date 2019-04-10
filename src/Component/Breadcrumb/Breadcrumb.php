<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);
    }
}