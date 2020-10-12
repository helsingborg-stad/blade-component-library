<?php

namespace BladeComponentLibrary\Component\Collection__Item;

class Collection__Item extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        if($isCurrent) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-current'; 
        }

        if($isAligned) {
            $this->data['classList'][] = $this->getBaseClass() . '--aligned'; 
        }

        if($link) {
            $this->data['componentElement'] = "a"; 
            $this->data['action'] = false; 
            $this->data['classList'][] = $this->getBaseClass() . '--action';
            $this->data['attributeList']['href'] = $link; 
		} else {
            $this->data['componentElement'] = "div"; 
        }
 
    }
}