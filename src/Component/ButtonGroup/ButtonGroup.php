<?php

namespace BladeComponentLibrary\Component\ButtonGroup;

class ButtonGroup extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-buttongroup');

        if(isset($toggle) && $toggle){
            $this->data['container'] = 'js-toggle-container';
        }
        
        if(isset($borderColor)){
            $this->data['classList'][] = $this->getBaseClass() . '__border--' . $borderColor; 
        }

        if(isset($backgroundColor)){
            $this->data['classList'][] = $this->getBaseClass() . ' .c-button--' . $backgroundColor;
        }
        
    }
}
