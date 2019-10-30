<?php

namespace BladeComponentLibrary\Component\Typography;

class Typography extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for easy access (fetch only)
        extract($this->data);

        // Add base class
        array_unshift($this->data['classList'], 'c-typography');

        //Variant
        $this->data['classList'][] = $this->getBaseClass() . "__variant--" . $variant;
    }
}