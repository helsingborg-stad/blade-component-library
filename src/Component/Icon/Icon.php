<?php

namespace BladeComponentLibrary\Component\Icon;

class Icon extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "icon"; 

        //Backwards support
        $this->data['classList'][] = "pricon"; 

        //Append space before label
        if($label = trim($label)) {
            $this->data['label'] = " " . $label; 
        }

        //Size
        if($size != 1) {
            $this->data['classList'][] = $classPrefix . "-".$size."x"; 
        }
    }
}