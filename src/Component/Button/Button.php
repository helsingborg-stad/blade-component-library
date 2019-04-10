<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController  
{
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Default label 
        $this->data['text'] = "Undefined label"; 

        //Class list
        $this->data['classList'][] = "btn"; 

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