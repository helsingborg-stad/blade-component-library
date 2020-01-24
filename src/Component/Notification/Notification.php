<?php

namespace BladeComponentLibrary\Component\Notification;

class Notification extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for easy access (fetch only)
        extract($this->data);
        if($animation['onPageLoad']) $this->data['classList'][] = $this->getBaseClass() . '__spawn--' . $animation['direction'];
        $this->data['attributeList']['direction'] = $animation['direction'];
    }
}