<?php

namespace BladeComponentLibrary\Component\Notification;

class Notification extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for easy access (fetch only)
        extract($this->data);
        if($animation['onPageLoad']) $this->data['classList'][] = $this->getBaseClass() . '__slide_from--' . $animation['direction'];
        
    }
}