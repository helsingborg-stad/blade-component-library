<?php

namespace BladeComponentLibrary\Component\Form;

class Form extends \BladeComponentLibrary\Component\BaseController 
{
    public function init() {
        //Extract array for eazy access (fetch only)
        extract($this->data);

        //Give base class
        $this->data['classList'][] = "c-form"; 
        
    }
}