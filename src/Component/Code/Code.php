<?php

namespace BladeComponentLibrary\Component\Code;

class Code extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Class list
        $this->data['classList'][] = "c-code"; 

        //Escape
        if($escape) {
            $this->data['slot'] = htmlentities($slot); 
        }
    }
}