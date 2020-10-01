<?php

namespace BladeComponentLibrary\Component\Collection;

class Collection extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if($compressed) {
            $this->data['classList'][] = $this->getBaseClass() . '--compressed'; 
        }

        if($isOpen) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-open'; 
        }

        if($subCollection) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-subcollection'; 
        }
    }
}