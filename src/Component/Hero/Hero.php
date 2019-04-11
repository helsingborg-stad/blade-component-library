<?php

namespace BladeComponentLibrary\Component\Hero;

class Hero extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "hero"; 

        //Check if enough data to display
        if($headline || $content || $background) {
            $this->data['componentShow'] = true; 
        } else {
            $this->data['componentShow'] = false; 
        }
        
    }
}