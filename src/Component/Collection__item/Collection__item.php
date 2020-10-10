<?php

namespace BladeComponentLibrary\Component\Collection__Item;

class Collection__Item extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Key for if slot contains any data
        if(is_object($this->data['subItem'])) {
            $this->data['subItemExists'] = !empty(parent::accessProtected($this->data['subItem'], "html"));
        } 

        if($isCurrent) {
            $this->data['classList'][] = $this->getBaseClass() . '--is-current'; 
        }

        if($isAligned) {
            $this->data['classList'][] = $this->getBaseClass() . '--aligned'; 
        }

        if($link) {
			$this->data['componentElement'] = "a"; 
		} else {
			$this->data['componentElement'] = "div"; 
        }
 
    }
}