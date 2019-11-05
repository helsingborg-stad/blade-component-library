<?php

namespace BladeComponentLibrary\Component\ButtonGroup;

class ButtonGroup extends \BladeComponentLibrary\Component\BaseController
{

    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        // Base class
        array_unshift($this->data['classList'], 'c-btn-group');
        
        if(isset($borderColor)){
            $this->data['classList'][] = $this->getBaseClass() . '__border--' . $border['color']; 
        }

        
    }
}
