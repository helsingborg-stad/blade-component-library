<?php

namespace BladeComponentLibrary\Component\Hero;

class Hero extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-hero"; 

        //Vertical text alignment
        $this->data['classList'][] = $this->getBaseClass() . "--valign-" . $verticalTextAlignment;  

        //Check if enough data to display
        if($headline || $content || $background) {
            $this->data['componentShow'] = true; 
        } else {
            $this->data['componentShow'] = false; 
        }

        //Toogle text color
        if($textColor == "dark") {
            $this->data['classList'][] = $this->getBaseClass() . "--color-dark"; 
        } else {
            $this->data['classList'][] = $this->getBaseClass() . "--color-light";  
        }

        //Toogle gradient color
        if($gradientColor) {
            $this->data['classList'][] = $this->getBaseClass() . "--gradient-" . $gradientColor; 
        }
    }
}