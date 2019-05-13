<?php

namespace BladeComponentLibrary\Component\Hero;

class Hero extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-hero"; 

        //Text alignment
        $this->data['classList'][] = "text-align-" . $textAlignment; 

        //Vertical text alignment
        $this->data['classList'][] = "vertical-align-" . $verticalTextAlignment; 

        //Check if enough data to display
        if($headline || $content || $background) {
            $this->data['componentShow'] = true; 
        } else {
            $this->data['componentShow'] = false; 
        }
        
    }
}