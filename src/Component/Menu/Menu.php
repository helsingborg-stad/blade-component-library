<?php

namespace BladeComponentLibrary\Component\Menu;

class Menu extends \BladeComponentLibrary\Component\BaseController  
{
    
    public function init() {

        //Extract array for eazy access (fetch only)
        extract($this->data);

        $this->data['classList'][] = "c-menu"; 
    }
}