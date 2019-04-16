<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "btn"; 

        //Default link
        if(!$href) {
            $this->data['href'] = "#"; 
        }

        //Primary btn
        if($isPrimary) {
            $this->data['classList'][] = "btn-primary"; 
        }

        //Disabled btn
        if($isDisabled) {
            $this->data['classList'][] = "btn-disabled"; 
        }

        //Disabled btn
        if($isOutlined) {
            $this->data['classList'][] = "btn-outline"; 
        }
    }
}