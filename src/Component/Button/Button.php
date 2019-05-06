<?php

namespace BladeComponentLibrary\Component\Button;

class Button extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-btn"; 

        //Default link
        if(!$href) {
            $this->data['href'] = "#"; 
        }

        //Primary btn
        if($isPrimary) {
            $this->data['classList'][] = $this->getBaseClass() . "--primary"; 
        }

        //Disabled btn
        if($isDisabled) {
            $this->data['classList'][] = $this->getBaseClass() . "--disabled"; 
        }

        //Disabled btn
        if($isOutlined) {
            $this->data['classList'][] = $this->getBaseClass() . "--outline"; 
        }

        //Primary btn
        if($isCircle) {
            $this->data['classList'][] = $this->getBaseClass() . "--round"; 
        }

        //Primary btn
        if($isPlain) {
            $this->data['classList'][] = $this->getBaseClass() . "--plain"; 
        }
    }
}