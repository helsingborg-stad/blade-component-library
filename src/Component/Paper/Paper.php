<?php

namespace BladeComponentLibrary\Component\Paper;

class Paper extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Give base class
        $this->data['classList'][] = "c-paper"; 

        //Create padding modifier
        if(is_numeric($padding)) {
            $this->data['classList'][] = $this->getBaseClass() . "--padding-" . $padding; 
        }
    }
}